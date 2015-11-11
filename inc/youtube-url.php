<?php 
/*
* parse_youtube_url() PHP function
* @param string $url URL to be parsed, eg:
* http://youtu.be/BLxI_1iKYgc,
* http://www.youtube.com/embed/BLxI_1iKYgc
* http://www.youtube.com/watch?v=BLxI_1iKYgc
* @param string $return what to return
* - embed, return embed code
* - thumb, return URL to thumbnail image
* - hqthumb, return URL to high quality thumbnail image.
* @param string $width width of embeded video, default 560
* @param string $height height of embeded video, default 349
* @param string $rel whether embeded video to
   show related video after play or not.
* How to Use...
* // return thumb image
  echo parse_youtube_url('http://youtu.be/ML2KAaR26Pk','mqthumb');
* // return embed url
  echo parse_youtube_url('http://www.youtube.com/watch?v=ML2KAaR26Pk','embedurl');
*/

function parse_youtube_url($url,$return='embed',$width='',$height='',$rel=0){
  $urls = parse_url($url);
    // url is http://youtu.be/abcd
    if($urls['host'] == 'youtu.be'){
      $id = ltrim($urls['path'],'/');
    }
    // url is http://www.youtube.com/embed/abcd
    else if(strpos($urls['path'],'embed') == 1){
      $id = end(explode('/',$urls['path']));
    }
     // url is xxxx only
    else if(strpos($url,'/')===false){
      $id = $url;
    }
    // http://www.youtube.com/watch?feature=player_embedded&v=ML2KAaR26Pk
    // url is http://www.youtube.com/watch?v=ML2KAaR26Pk
    else{
      parse_str($urls['query']);
      $id = $v;
      if(!empty($feature)){
          $id = end(explode('v=',$urls['query']));
      }
    }
    // return embed iframe
    if($return == 'embed'){
      return '<iframe width="'.($width?$width:560).'" height="'.($height?$height:315).'" src="http://www.youtube.com/embed/'.$id.'?rel='.$rel.'" frameborder="0" allowfullscreen></iframe>';
    }
    // return embed only
    else if($return == 'embedurl'){
      return '//www.youtube.com/embed/'.$id;
    }
    // return normal thumb
    else if($return == 'thumb'){
      return '//i1.ytimg.com/vi/'.$id.'/default.jpg';
    }
    // return hqthumb
    else if($return == 'mqthumb'){
      return '//i1.ytimg.com/vi/'.$id.'/mqdefault.jpg';
    }
    // else return id
    else{
      return $id;
    }
}