<?php
namespace Article;
class Comment{
	function hello(){
		echo "hello";
	}

}

namespace MessageBoard;
class Comment{
	function hello(){
		echo "nihao";
	}
}


$comment = new Comment;
$comment->hello();
echo "<br>";
$comment = new \Article\Comment;
$comment->hello();

?>