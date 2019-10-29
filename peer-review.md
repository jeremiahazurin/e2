## P3 Peer Review

+ Reviewer's name: Jeremiah
+ Reviwee's name: Susan
+ URL to reviewee's Github repo: *<https://github.com/shcantrell/e2>*

*Answer the following questions in regards to the student's project you are reviewing. Include code snippets in your answers when relevant.*


### Are you able to produce any errors or unexpected results?
After running this through the W3 Validator, it says that `|` is not a valid character in line 9 of her `index` file. But it's a part of a URL that (I assume) was generated for her so I think this is OK. So it was unexpected that this character was "illegal" but also legal.

### Referencing the course nots on [Form design flow](https://hesweb.dev/e2/notes#/php/form-flow), describe the form design flow used in this project.
Susan Form Design B. She included an `index.php` file (POST) to submit to a `process.php` file that had redirected to a `done.php` file to display the results. 

### Are there any separation of concern issues (i.e. non-display specific logic in view files, display code in controller files)? 
No.

### Are there aspects of the code that you feel were not self-evident and would benefit from comments?
Extremely well-defined. Her variables and boolean conditionals are consistent, specific, and descriptive to each associated astrological sign. There are adequate comments in the `process.php` file that helped guide me to understanding more of the complex code that I couldn't understand at first glance, most notable line 25-27. 

### List any/all built-in PHP methods used with a brief summary of what the method does
In `file.php`:
`<form method='POST' action='process.php'>` directs to the `process.php` file. She uses the POST form method.

In `process.php`:
- `$monthInfo` assigns each month to the number of days in each month
- routine `if-else` statements coupled with a `$inputValidated` boolean and `$inputResult` to indicate the appropriate result
    - `$noValueEntered` to indicate no input
- `$_SESSION` stores data between requests

In `done.php`:
- `echo` to print strings
- `$firstLetterOfSign` to indicate whether the letter of their name starts with either a vowel or consonant

In `done-controller`:
- Various conditions (`$convertedDay` to convert integer to string values, `$youArePhrase` and `$firstLetterOfSign` to capitalize first letter of string) to format and attribute results to entries/input

### Are there any parts of the code that you found interesting or taught you something new?
Susan is very thorough. For every bit of change--from the capitalization of letters to the details within what specific dates constitutes which astrological sign (ie Oct 23 to Nov 21 is a Scorpio found in lines 28-79 of `process.php`) to having no input at all from the user--there is code associated with it as well as a confirmation/result message. Very thorough. 

Also, I like the CSS! We aren't learning that in this class but I thought it was an interesting add since, having just seen what it looks like, it looks quite different from PHP. So for me, that is very new.

### Are there any parts of the code that you don't understand?
It's very easy to follow (in terms of the logic) but I'm not sure how `substr($inputResult, 0, 1)` in line 14 of `done-controller.php` determines what a vowel and consonant would be. How is the 0 this or the 1 that (this/that being consonant/vowel). I'm sure you have it spelled out somewhere but I'm not sure where.

### Are there any best practices discussed in course material that you feel were not addressed in the code?
I guess it depends on who you speak to but I noticed that Susan is a space person versus tab. She addressed it (since she uses spaces) but depending on whom you are speaking to, she didn't since one can say that she didn't use the "appropriate" one (I'm a tabs kind of guy...for now!).

Other than that, no, she addressed all of the best practices as far as I know.

### Do you have any additional comments not covered in the above questions?
I'm very impressed! I'm also glad that you strayed away from the "rock, paper, scissors" game (as well as the other options) and created your own. Very pleasant surprise!