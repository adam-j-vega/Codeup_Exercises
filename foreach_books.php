<?php

$books = array(
 	   'The Hobbit' => array(
	        'published' => 1937,
	        'author' => 'J. R. R. Tolkien',
	        'pages' => 310
	    ),
	    'Game of Thrones' => array(
	        'published' => 1996,
	        'author' => 'George R. R. Martin',
	        'pages' => 835
	    ),
	    'The Catcher in the Rye' => array(
	        'published' => 1951,
	        'author' => 'J. D. Salinger',
	        'pages' => 220
	    ),
	    'A Tale of Two Cities' => array(
	        'published' => 1859,
	        'author' => 'Charles Dickens',
	        'pages' => 544
	    )
);
// if($book_info['published'] > 1950)
// foreach($books as $book_title => $book_info){
// 	echo "{$book_title} \n";
// 	foreach($book_info as $key => $value){
// 			echo "{$key} {$value}. \n";
// 		}
// 	}


// foreach($books as $book_title => $book_info){
// 	foreach($book_info as $key => $value){
// 		if($book_info['published'] > 1950){
// 			echo "{$book_title} {$key} {$value} \n";
// 		}
// 	}
// }

foreach ($books as $title => $attributes) {
	if($attributes['published'] > 1950){
		echo "$title\n";
		echo "\t{$attributes['published']}\n"; 
		echo "\t{$attributes['author']}\n";
		echo "\t{$attributes['pages']}\n";

	}
}


?>