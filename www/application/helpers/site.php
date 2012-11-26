<?

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function getRandomQuote()
{
	$quotes = array();

	$quotes[] = array("quote" =>"Be the change you wish to see in the world.","source"=>"Mahatma Gandhi");
	$quotes[] = array("quote" =>"The man who has no imagination has no wings.","source"=>"Muhammad Ali");
	$quotes[] = array("quote" =>"A successful man is one who can lay a firm foundation with the bricks others 
			have thrown at him.","source"=>"David Brinkley");
	
	$quotes[] = array("quote" =>"Logic will get you from A to B. Imagination will take you everywhere.","source"=>"Albert Einstein");
	$quotes[] = array("quote" =>"Reality is merely an illusion, albeit a very persistent one.","source"=>"Albert Einstein");
	$quotes[] = array("quote" =>"The goal of education is the advancement of knowledge and the dissemination of truth.","source"=>"John F. Kennedy ");
	$quotes[] = array("quote" =>"To raise new questions, new possibilities, to regard old problems from a new angle, 
			requires creative imagination and marks real advance in science.","source"=>"Albert Einstein ");

	$quotes[] = array("quote" =>"Change is the law of life. And those who look only to the past or the present are certain to miss the future.","source"=>"John F. Kennedy");

	$quotes[] = array("quote" =>"When written in Chinese, the word \"crisis\" is composed of two characters. One represents danger and the other represents opportunity.","source"=>"John F. Kennedy ");

	$quotes[] = array("quote" =>"Hell, there are no rules here - we're trying to accomplish something.","source"=>"Thomas Edison ");

	$quotes[] = array("quote" =>"Innovation distinguishes between a leader and a follower.","source"=>"Steve Jobs");
	
	$rand = rand(0,sizeOf($quotes) -1);

	return $quotes[$rand];
}

?>