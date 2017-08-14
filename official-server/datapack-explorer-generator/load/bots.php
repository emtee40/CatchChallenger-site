<?php
if(!isset($datapackexplorergeneratorinclude))
	die('abort into load bots'."\n");

$bots_meta=array();
$bots_found_in=array();
$fight_to_bot=array();
$bots_name_count=array();
$industry_to_bot=array();
$team_to_bot=array();
$item_to_bot_shop=array();
$highest_bot_id=0;
foreach($bots_file as $file=>$bots_file_list)
foreach($bots_file_list as $maindatapackcode=>$value)
{
    if(is_file($datapack_path.'map/main/'.$maindatapackcode.'/'.$file))
    {
        $content=file_get_contents($datapack_path.'map/main/'.$maindatapackcode.'/'.$file);
        preg_match_all('#<bot [^>]+>(.*)</bot>#isU',$content,$temp_text_list);
        foreach($temp_text_list[0] as $bot_text)
        {
            $botbal=preg_replace('#^.*(<bot [^>]+>).*$#isU','$1',$bot_text);
            $id=preg_replace('#^.*<bot [^>]*id="([0-9]+)"[^>]*>.*$#isU','$1',$botbal);
            if(!preg_match('#^[0-9]+$#isU',$id))
                echo $maindatapackcode.'/'.$file.': bot with id wrong '.$botbal."\n";
            else
            {
                if(isset($bots_meta[$maindatapackcode][$id]))
                    echo $maindatapackcode.'/'.$file.': bot with id '.$id.' is already found into: '.$bots_found_in[$maindatapackcode][$id]."\n";
                else
                {
                    $name='';
                    if(preg_match('#<name( lang="en")?>.*</name>#isU',$bot_text))
                    {
                        $name=preg_replace('#^.*<name( lang="en")?>(.*)</name>.*$#isU','$2',$bot_text);
                        $name=str_replace('<![CDATA[','',str_replace(']]>','',$name));
                        if(isset($bots_name_count[$maindatapackcode]['en'][text_operation_do_for_url($name)]))
                            $bots_name_count[$maindatapackcode]['en'][text_operation_do_for_url($name)]++;
                        else
                            $bots_name_count[$maindatapackcode]['en'][text_operation_do_for_url($name)]=1;
                    }
                    $name_in_other_lang=array('en'=>$name);
                    foreach($lang_to_load as $lang)
                    {
                        if($lang=='en')
                            continue;
                        if(preg_match('#<name lang="'.$lang.'">([^<]+)</name>#isU',$bot_text))
                        {
                            $temp_name=preg_replace('#^.*<name lang="'.$lang.'">([^<]+)</name>.*$#isU','$1',$bot_text);
                            $temp_name=str_replace('<![CDATA[','',str_replace(']]>','',$temp_name));
                            $temp_name=preg_replace("#[\n\r\t]+#is",'',$temp_name);
                            $name_in_other_lang[$lang]=$temp_name;
                        }
                        else
                            $name_in_other_lang[$lang]=$name;
                        if(isset($bots_name_count[$maindatapackcode][$lang][text_operation_do_for_url($name_in_other_lang[$lang])]))
                            $bots_name_count[$maindatapackcode][$lang][text_operation_do_for_url($name_in_other_lang[$lang])]++;
                        else
                            $bots_name_count[$maindatapackcode][$lang][text_operation_do_for_url($name_in_other_lang[$lang])]=1;
                    }
                    $team='';
                    if(preg_match('#<bot [^>]*team="[^"]+"[^>]*>#isU',$botbal))
                    {
                        $team=preg_replace('#<bot [^>]*team="([^"]+)"[^>]*>#isU','$1',$botbal);
                        if(!isset($team_to_bot[$team]))
                            $team_to_bot[$team]=array();
                        $team_to_bot[$team][]=$id;
                    }
                    if($highest_bot_id<$id)
                        $highest_bot_id=$id;
                    $bots_meta[$maindatapackcode][$id]=array('name'=>$name_in_other_lang,'team'=>$team,'onlytext'=>true,'step'=>array());
                    $bots_found_in[$maindatapackcode][$id]=$maindatapackcode.'/'.$file;
                    $temp_step_list=explode('<step',$bot_text);
                    foreach($temp_step_list as $step_text)
                    {
                        if(preg_match('#^[^>]* id="([0-9]+)".*$#isU',$step_text))
                        {
                            $step_id=preg_replace('#^[^>]* id="([0-9]+)".*$#isU','$1',$step_text);
                            if(isset($bots_meta[$maindatapackcode][$id]['step'][$step_id]))
                                echo 'step with id '.$step_id.' for bot '.$id.' is already found for maindatapackcode: '.$maindatapackcode."\n";
                            else
                            {
                                if(preg_match('#^[^>]* type="([a-z]+)".*$#isU',$step_text))
                                {
                                    $step_type=preg_replace('#^[^>]* type="([a-z]+)".*$#isU','$1',$step_text);
                                    if($step_type=='text')
                                    {
                                        $step_text=preg_replace('#^.*<text( lang="en")?>('.preg_quote('<![CDATA[').')?(.*)('.preg_quote(']]>').')?</text>.*$#isU','$3',$step_text);
                                        $step_text=str_replace(']]>','',str_replace('<![CDATA[','',$step_text));
                                        $step_text_in_other_lang=array('en'=>$step_text);
                                        foreach($lang_to_load as $lang)
                                        {
                                            if($lang=='en')
                                                continue;
                                            if(preg_match('#<name lang="'.$lang.'">([^<]+)</name>#isU',$entry))
                                            {
                                                $temp_step_text=preg_replace('#^.*<text lang="'.$lang.'">('.preg_quote('<![CDATA[').')?(.*)('.preg_quote(']]>').')?</text>.*$#isU','$3',$step_text);
                                                $temp_step_text=str_replace(']]>','',str_replace('<![CDATA[','',$temp_step_text));
                                                $step_text_in_other_lang[$lang]=$temp_step_text;
                                            }
                                            else
                                                $step_text_in_other_lang[$lang]=$step_text;
                                        }
                                        $bots_meta[$maindatapackcode][$id]['step'][$step_id]=array('type'=>$step_type,'text'=>$step_text_in_other_lang);
                                    }
                                    else if($step_type=='fight')
                                    {
                                        if(preg_match('#^.*fightid="([0-9]+)".*$#isU',$step_text))
                                        {
                                            $fightid=preg_replace('#^.*fightid="([0-9]+)".*$#isU','$1',$step_text);
                                            if(isset($fight_meta[$maindatapackcode][$fightid]))
                                            {
                                                $leader=false;
                                                if(preg_match('#leader="true"#isU',$step_text))
                                                    $leader=true;
                                                $bots_meta[$maindatapackcode][$id]['onlytext']=false;
                                                $bots_meta[$maindatapackcode][$id]['step'][$step_id]=array('type'=>$step_type,'fightid'=>$fightid,'leader'=>$leader);
                                                if(!isset($fight_to_bot[$maindatapackcode][$fightid]))
                                                    $fight_to_bot[$maindatapackcode][$fightid]=array();
                                                $fight_to_bot[$maindatapackcode][$fightid][]=$id;
                                            }
                                            else
                                                echo 'fightid not found: '.$fightid.' for step with id '.$step_id.' for bot '.$id.' in file: '.$file.' for maindatapackcode: '.$maindatapackcode."\n";
                                        }
                                        else
                                            echo 'fightid attribute not found for step with id '.$step_id.' for bot '.$id.' in file: '.$file.' for maindatapackcode: '.$maindatapackcode."\n";
                                    }
                                    else if($step_type=='heal')
                                    {
                                        $bots_meta[$maindatapackcode][$id]['onlytext']=false;
                                        $bots_meta[$maindatapackcode][$id]['step'][$step_id]=array('type'=>$step_type);
                                    }
                                    else if($step_type=='learn')
                                    {
                                        $bots_meta[$maindatapackcode][$id]['onlytext']=false;
                                        $bots_meta[$maindatapackcode][$id]['step'][$step_id]=array('type'=>$step_type);
                                    }
                                    else if($step_type=='warehouse')
                                    {
                                        $bots_meta[$maindatapackcode][$id]['onlytext']=false;
                                        $bots_meta[$maindatapackcode][$id]['step'][$step_id]=array('type'=>$step_type);
                                    }
                                    else if($step_type=='market')
                                    {
                                        $bots_meta[$maindatapackcode][$id]['onlytext']=false;
                                        $bots_meta[$maindatapackcode][$id]['step'][$step_id]=array('type'=>$step_type);
                                    }
                                    else if($step_type=='clan')
                                    {
                                        $bots_meta[$maindatapackcode][$id]['onlytext']=false;
                                        $bots_meta[$maindatapackcode][$id]['step'][$step_id]=array('type'=>$step_type);
                                    }
                                    else if($step_type=='shop')
                                    {
                                        if(preg_match('#^.*shop="([0-9]+)".*$#isU',$step_text))
                                        {
                                            $shop=preg_replace('#^.*shop="([0-9]+)".*$#isU','$1',$step_text);
                                            if(isset($shop_meta[$maindatapackcode][$shop]))
                                            {
                                                $bots_meta[$maindatapackcode][$id]['onlytext']=false;
                                                $bots_meta[$maindatapackcode][$id]['step'][$step_id]=array('type'=>$step_type,'shop'=>$shop);
                                                if(!isset($shop_to_bot[$shop]))
                                                    $shop_to_bot[$shop][$maindatapackcode]=array();
                                                $shop_to_bot[$shop][$maindatapackcode][]=$id;
                                            }
                                            else
                                                echo 'shop: '.$shop.' not found for step with id '.$step_id.' for bot '.$id.' in file: '.$file.' for maindatapackcode: '.$maindatapackcode."\n";
                                        }
                                        else
                                            echo 'shop attribute not found for step with id '.$step_id.' for bot '.$id.', $step_text: '.$step_text."\n";
                                    }
                                    else if($step_type=='sell')
                                    {
                                        if(preg_match('#^.*shop="([0-9]+)".*$#isU',$step_text))
                                        {
                                            $shop=preg_replace('#^.*shop="([0-9]+)".*$#isU','$1',$step_text);
                                            if(isset($shop_meta[$maindatapackcode][$shop]))
                                            {
                                                $bots_meta[$maindatapackcode][$id]['onlytext']=false;
                                                $bots_meta[$maindatapackcode][$id]['step'][$step_id]=array('type'=>$step_type,'shop'=>$shop);
                                            }
                                            else
                                                echo 'sell: '.$shop.' not found for step with id '.$step_id.' for bot '.$id.' in file: '.$file.' for maindatapackcode: '.$maindatapackcode."\n";
                                        }
                                        else
                                            $bots_meta[$maindatapackcode][$id]['step'][$step_id]=array('type'=>$step_type);
                                    }
                                    else if($step_type=='zonecapture')
                                    {
                                        if(preg_match('#^.*zone="([^"]+)".*$#isU',$step_text))
                                        {
                                            $zone=preg_replace('#^.*zone="([^"]+)".*$#isU','$1',$step_text);
                                            if(isset($zone_meta[$maindatapackcode][$zone]))
                                            {
                                                $bots_meta[$maindatapackcode][$id]['onlytext']=false;
                                                $bots_meta[$maindatapackcode][$id]['step'][$step_id]=array('type'=>$step_type,'zone'=>$zone);
                                            }
                                            else
                                                echo 'zone: '.$zone.' not found for step with id '.$step_id.' for bot '.$id.' in file: '.$file.' for maindatapackcode: '.$maindatapackcode."\n";
                                        }
                                        else
                                            echo 'zone attribute not found for step with id '.$step_id.' for bot '.$id.' for maindatapackcode: '.$maindatapackcode."\n";
                                    }
                                    else if($step_type=='industry')
                                    {
                                        if(preg_match('#^.*industry="([0-9]+)".*$#isU',$step_text))
                                        {
                                            $industry=preg_replace('#^.*industry="([0-9]+)".*$#isU','$1',$step_text);
                                            if(isset($industrie_link_meta[$maindatapackcode][$industry]))
                                            {
                                                $bots_meta[$maindatapackcode][$id]['onlytext']=false;
                                                $bots_meta[$maindatapackcode][$id]['step'][$step_id]=array('type'=>$step_type,'industry'=>$industry);
                                                $link=$industrie_link_meta[$maindatapackcode][$industry];
                                                if(!isset($industry_to_bot[$link['industry_id']]))
                                                    $industry_to_bot[$link['industry_id']]=array();
                                                $industry_to_bot[$link['industry_id']][$maindatapackcode][$maindatapackcode]=$id;
                                            }
                                            else if(isset($industrie_link_meta[''][$industry]))
                                            {
                                                $bots_meta[$maindatapackcode][$id]['onlytext']=false;
                                                $bots_meta[$maindatapackcode][$id]['step'][$step_id]=array('type'=>$step_type,'industry'=>$industry);
                                                $link=$industrie_link_meta[''][$industry];
                                                if(!isset($industry_to_bot[$link['industry_id']]))
                                                    $industry_to_bot[$link['industry_id']]=array();
                                                $industry_to_bot[$link['industry_id']][''][$maindatapackcode]=$id;
                                            }
                                            else
                                                echo 'industrie_link_meta: '.$industry.' not found for step with id '.$step_id.' for bot '.$id.' for maindatapackcode: '.$maindatapackcode."\n";
                                        }
                                        else
                                            echo 'industry attribute not found for step with id '.$step_id.' for bot '.$id.': '.$step_text."\n";
                                    }
                                    else if($step_type=='quests')
                                    {}
                                    else
                                        echo 'step with id '.$step_id.' for bot '.$id.' have unknown type: '.$step_type."\n";
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    else
        echo $datapack_path.'map/'.$maindatapackcode.'/'.$file.' not found for the map: '.$value['map']."\n";
}
ksort($bots_meta);
ksort($bots_found_in);
ksort($fight_to_bot);
ksort($bots_name_count);
ksort($industry_to_bot);
ksort($team_to_bot);
ksort($item_to_bot_shop);
