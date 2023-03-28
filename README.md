# بسم الله الرحمن الرحيم

// TODO:
// FIXME:
// BUG:
// NOTE:
// HACK:
// COMMENT:
// [ ]:
// [x]:

## PHP

- #### class

```php
 class car {
   public $name;
   function set_name($name){
   $this->name = $name ;
   }
   function get_name(){
   $this->name;
   }
  }
```

### know the type

> gettype ();

### know the type and the content and length

> var_dump();

### know the content of array

> print_r();

### know the type is string

> is_string();

### know the type is int

> is_int();

### know the type is boolean

> is_bool();

### know the type is double(float)

> is_double();
> is_float();

### know the variable is number from string

> is_numeric('');

### know the variable is set

> isset();

### to define a constants

> define('const_name',const_val);

### to print a constants

> echo const_name;

### to change a string to number

> $strNumber = '12.31';
> $number = (float)$strNumber;

#### or

> $strNumber = '12.31';
> $number = floatval($strNumber);

### to format number

> number_format($number , num_to_splits ,dismal_sing, splits );

### to get string length

> strlen($string);

### to trim string

> trim($string);

### to trim left of string

> ltrim($string);

### to trim right of string

> rtrim($string);

### to count word of string

> str_word_count($string);

### to revers string

> strrev($string);

### to upper case string

> strtoupper($string);

### to lower case string

> strtolower($string);

### to search word in string(case sensitive)

> strpos($string,'word');

### to search word in string(not case sensitive)

> stripos($string,'word');

### to replace word in string(case sensitive)

> str_replace('word','word_to_replace',$string,);

### to replace word in string(not case sensitive)

> str_ireplace('word','word_to_replace',$string,);

### to cut word from string

> substr($string,pos_to_cut,length_of_string_left);

### to print string as it is with breaks

> echo nl2br($string);

### to print string as it is with html tags

> echo htmlentities($string);

### to print array length

> echo count($array);

### to add to the end of array

> $array[] = $item;

#### or

> array_push($array,$item);

### to remove from the end of array

> array_pop($array);
> //and it well return that item

### to add to the first of array

> array_unshift($array,$item);

### to remove from the first of array

> array_shift($array);
> //and it well return that item

### to make array from string

> explode('sprat',$string);

### to make string from array

> implode('sprat',$array);

### to search item in array

> in_array($item,$array);

### to search item index in array

> array_search($item,$array);

### to merge two arrays

> array_merge($array1,$array2);

#### or

> [...$array1,...$array2];

### to sort array

> sort($array);

### to reverse sort array

> rsort($array);

### if not true do

> $array[index]??="def_val";

#### or

> $item ?: do_val;

### if true do or do (ternary if)

> $item > conditione ? true_do : false_do ;

### to print array values

> array_values($array);

### sort array by keys

> ksort($array);

### sort array by values

> asort($array);
