<?php
include 'blogpost.php';
include 'db.php';

function GetBlogPosts($inId=null, $inTagId =null)
{
	global $con;

	if (!empty($inId))
	{
		$sql = "SELECT * FROM blog_posts WHERE id = " . $inId . " ORDER BY id DESC"; 
	}
	else if (!empty($inTagId))
	{
		$sql = "SELECT blog_posts.* FROM blog_post_tags LEFT JOIN (blog_posts) ON (blog_post_tags.postID = blog_posts.id) WHERE blog_post_tags.tagID =" . $tagID . " ORDER BY blog_posts.id DESC";
	}
	else
	{
		$sql = "SELECT * FROM blog_posts ORDER BY id DESC";
	}
	
	$postArray = array();
	$result = mysqli_query($con, $sql);

	if ($result->num_rows > 0) {
    // output data of each row
    while($row = mysqli_fetch_array($result)) 
	{
		$myPost = new BlogPost($row["id"], $row['title'], $row['post'], $row["author_id"], $row['date_posted']);
		array_push($postArray, $myPost);
	}
	}
	else{
		echo "0 results";
	}

	return $postArray;
}