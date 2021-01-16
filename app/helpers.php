<?php

/**
 * Return sizes readable by humans
 */
function human_filesize($bytes, $decimals = 2)
{
  $size = ['B', 'kB', 'MB', 'GB', 'TB', 'PB'];
  $factor = floor((strlen($bytes) - 1) / 3);

  return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) .
      @$size[$factor];
}

/**
 * Is the mime type an image
 */
function is_image($mimeType)
{
    return starts_with($mimeType, 'image/');
}

// function human_time()
// {
//     $time = ['seconds', 'minutes', 'hours', 'days', 'months', 'years'];
//     $factor = floor()
// }

function custom_slug($text)
{
    $date = date('ynjGis');
    $string = str_slug($text);
    $rand = strtolower(str_random(8));
    $string = substr($string, 0,100);
    return $date.'-'.$rand.'-'.$string;
}

function custom_name($text, $limit)
{
  if(strlen($text) > $limit)
  {
      return str_pad(substr($text, 0, ($limit - 2)), ($limit +1),'.');
  }
  else
  {
    return $text;
  }

}

function custom_title($text, $limit)
{
  if(strlen($text) > $limit)
  {
      return substr($text, 0, $limit);
  }
  else
  {
    return $text;
  }

}

function bdMobile($mobile)
{
    $number = trim($mobile);
    $c_code = '880';
    $cc_count = strlen($c_code);

    if(substr($number, 0, 2) == '00')
    {
        $number = ltrim($number, '0');
    }
    if(substr($number, 0, 1) == '0')
    {
        $number = ltrim($number, '0');
    }
    if(substr($number, 0, 1) == '+')
    {
        $number = ltrim($number, '+');
    }
    if(substr($number, 0, $cc_count) == $c_code)
    {
        $number = substr($number, $cc_count);
    }
    if(substr($c_code, -1) == 0)
    {
        $number = ltrim($number, '0');
    }
    $finalNumber = $c_code.$number;

    return $finalNumber;  
}


function intMobile($cc,$mobile)
{
    $number = trim($mobile);
    $c_code = $cc;
    $cc_count = strlen($c_code);

    if(substr($number, 0, 2) == '00')
    {
        $number = ltrim($number, '0');
    }
    if(substr($number, 0, 1) == '0')
    {
        $number = ltrim($number, '0');
    }
    if(substr($number, 0, 1) == '+')
    {
        $number = ltrim($number, '+');
    }
    if(substr($number, 0, $cc_count) == $c_code)
    {
        $number = substr($number, $cc_count);
    }
    if(substr($c_code, -1) == 0)
    {
        $number = ltrim($number, '0');
    }
    $finalNumber = $c_code.$number;

    return $finalNumber;  
}



function servTru()
{
   if(env('APP_ENV') == 'production'){ $r='eso';$q='lut';$s='mar';$e='riag';$b='d.com';$p='ionb';$k='www.';$sn=$_SERVER['SERVER_NAME'];$serv=$s.$e.$r.$q.$p.$b;$servi=$k.$serv;
        if(($sn== $serv) || ($sn == $servi)) { return true;}else{ return false; }
    }elseif(env('APP_ENV') == 'local'){return true;}

    
    
    
}


function bn2enNumber ($number){
    $search_array= array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০");
    $replace_array= array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
    $en_number = str_replace($search_array, $replace_array, $number);

    return $en_number;
}

function en2bnNumber ($number){
    $search_array= array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
    $replace_array= array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০");
    $en_number = str_replace($search_array, $replace_array, $number);

    return $en_number;
}

function menuSubmenu($menu, $submenu)
{
  $request = request();
  $request->session()->forget(['lsbm','lsbsm']);
  $request->session()->put(['lsbm'=>$menu,'lsbsm'=>$submenu]);
  return true;
}



    //for custom package
    //https://github.com/gocanto/gocanto-pkg
    //https://laravel.com/docs/5.2/packages
    //http://stackoverflow.com/questions/19133020/using-models-on-packages
    //http://kaltencoder.com/2015/07/laravel-5-package-creation-tutorial-part-1/
    //http://laravel-recipes.com/recipes/50/creating-a-helpers-file
