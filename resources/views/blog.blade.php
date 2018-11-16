@extends('layouts.master')

@section('contents')
<div class="container">
	<p>
		<h3 > Installing XAMPP and working with Laravel</h3>
		<div class="margin-line">
In this blog post I will explain how to create a setup for a PHP project using Laravel and XAMPP Server.<br>
Laravel is an open source frame work that provides MVC architechture for PHP based projects. In order to use Laravel and setup the projrct environment I will first download/install AAMP Server using <a href="https://www.apachefriends.org/download.html" >Link</a>
</div>
<img src='images/xampp.png'  class="responsive"></img>

<h3 > Installing Laravel</h3>
<div class="margin-line">
Use instructions in the following link<br><div class="btn btn-link">https://www.ampps.com/wiki/Installing_Laravel_Framework</div>
</div>

<img src="images/laravelcollective-install.png" class="responsive" >
<br>


<h3 > Installing Composer</h3>
In the command prompt I ran 
<code>"C://Composer global require "laravel/installer=~1.1"</code>
<h4 style="margin-top: 30px 0px">Step 1.</h4>
<img src="images/install-composer.png" class="responsive" style="margin-top:20px 0px">
<h4 >Step 2.</h4>
<img src="images/install-composer-locate-php-step2.png" class="responsive">
<h4 >Step 3.</h4>
<img src="images/install-composer-locate-php-step3.png" class="responsive">
<h4 >Step 4.</h4>
<img src="images/install-composer-locate-php-step4.png" class="responsive">
<h4 >Step 5.</h4>
<div class="margin-line">
After installing it using above steps I double checked it from command prompt using <code>composer</code> and I was able to see the version of composer installed in my system.
</div>

<img src="images/install-composer-installed-step5.png" class="responsive">

<h3 > Installing Git/Git Bash</h3>
<div class="margin-line">
In order to install Git I went to <a href="https://desktop.github.com">GitHub Download</a>
</div>
<img src="images/gits-installation-tep8.png" class="responsive" >
<div class="margin-line">
Here I chose the type of download depending on my OS (Operating System). In my case it was <code>Windows (64-bit)</code><br>
Once installed I was able to see it as shown in the following image.</div>

<img src="images/gits-installed-step9.png" class="responsive ">

<h3 > Creating Laravel Project in the Command Prompt</h3>
<div class="margin-line">
I then changed directory (cd) to <code>/xampp/htdocs</code> and created my first laravel project using following command

<code>$ Composer create-project laravel/laravel RBassignment</code>

where RBassignment was the name of my project
It took some time and then I was able to see the magic!!!!!!
</div>

<img src="images/creating-laravel-project-xampp.png" class="responsive ">
<div class="margin-line">
I was also able to see all the files and directories that were created by composer as shown in the following image.
</div>
<img src="images/laravel-project-from-inside-step12.png" class="responsive ">
<div>
	<div class="margin-line">
I also downloaded sublime text editor and open this project in it as shown in the following figure. Different folder can be seen where controllers are under <code>App/HTTP</code>
</div>
<img src="images/sublime-project.png" class="responsive ">
</div>


<h3> Opening My Project using XAMPP </h3>
<div class="margin-line">
Make sure xmpp is turned on (Apache and MySQL are started) and all the Apache and MySQL are running.
simply go to browser and add localhos/ and it will show all the folders that are inside the ampps/www folder we can choose our project here to be run.
</div>
   <img src="images/xampp-started.png" class="responsive ">
<h3 > Laravel Framework</h3>
<div class="margin-line">

Why I love Frameworks? They provide great architecture and help us not waste our time to reinvent the wheel! Laravel framework is one of them, it is open source framework written in PHP and will be one of the most popular frameworks in 2019. It provides clean, secure blueprint for any web application and saves a lot of developer's time by not only providing basic written code but also creates an application structure with all important features in it, for example folders for Tests, database, routes and layouts. One of the most important feature is the MVC (Model View and Controller) structure and RESTFUL APIs etc.
 Laravel is an  MVC (Model View and Controller) framework which means all of an app's models and views will be controlled by a controller.
 </div>
 <img src="images/sublime-project.png" class="responsive ">
<div style="margin:20px 0px ">
Routes can be defined/viewed in <code>routes/web.php</code> folder
</div>

<img src="images/RB-routes-step13.png" class="responsive ">
<div class="margin-line">

	The above image is showing a routes/web.php file specifying a route <code> / </code> which will display the file welcome.blade.php located in the <code>views/welcome.blade.php</code>
 </div>
<h3 >Setting Laravel Virtual host</h3>
<div class="margin-line">
 In order to access above project I had to setup a virtual host which I accomplished by editing two files in etc folder <code> conf/extra/vhost.conf</code>
</div>
 <h5 >Step 1.</h5>
 <img src="images/RB-vhost-step14.png" class="responsive ">
  <h5 >Step 2.</h5>
<img src="images/RB-vhost-step15.png" class="responsive ">
 

<div class="jumbotron">

&lt; VirtualHost  *:80 &gt;<br>
  <br>  DocumentRoot  "C:/xampp/htdocs"
   <br> ServerName localhost
 <br>&lt;VirtualHost &gt;

</div>
    
<div style="margin:20px 0px "> 
For the second step open notepad as adinistrator and open 
<code>C:\Windows\System32\drivers\etc file</code>
and add the following
<div class="margin-line">

127.0.0.1 localhost
127.0.0.1 RBassignment.dev
</div>
<div class="margin-line">

I then restarted Apache web server.
</div>

<h3> How to fix mysql stopped working issue</h3>
<div class="margin-line">

I simply opened mysql configuration file and locate <code>[mysqlId] </code>and added the following line
<code>innodb_force_recovery = 1</code>
I then turned mysql button on. It started running. I then removed the above line from configuration file and saved it.

<h3>Starting Project</h3>
<div style="margin:20px 0px ">
In order to have all the JS functionality I needed Node Js which I installed <div class='btn btn-link'>https://nodejs.org/en/</div>.
<img src="images/nodejs-install.png" class="responsice">
Then I restart my cmd(command prompt) and cd(changed directory to rbassignment1 project and checked if the Node has been sussessfully installed
by typing <code>node --version</code> I got <code>version v10.13.0</code> as a result that means Node is there now I was able to install npm.
<p>
 NPM (Node Package Manager) is used for the javascript runtime environment.
 In order to install it I used the following command
 <div style="margin:20px 0px ">
<code>C:\xampp\rbassigment1/npm install</code>
it will take some time once installed we can run it using
<div class="jumbotron"> npm run dev</div>div> command 
<code> <img src="images/npm-compiling-assets.png" class="responsive "></code>

<h3>Installing Laravel for Forms</h3>
<p>
LaravelCollective is a package for forms. In order to install it I went to the <a href ="https://laravelcollective.com/docs/5.4/html#installation">link</a>. I then ran the following composer command.
<code><margin-top:20px;
  margin-bottom: 20px;
  color:orange;></code>

<code>$ composer require "laravelcollective/html":"^5.4.0".</code>
<div class="margin-line">

Once installed, I navigated to <code>config/app.php</code> and provide this new provider and finally provided alliases as shown in the picture in the same file. Now I was able to use all form actions using syntax provided in the documentation.
</div>
<h3>Using PHP Artisan to craete controllers</h3>
<div class="margin-line">

In Laravel, controllers are located inside App/Http folder. By default Laravel provides one controller but in order to create custom controllers I simply used <code>php artisan </code> command in the terminal 
</div>
<div class="active"> Note: add PHP inside the sysytem path variables in order to use the php artiusan command</div>

<div class="jumbotron">
	<div class="margin-line">

<code>$ php artisan make:controller QuestionsController --resource
<br>
$php artisan make:model 
</code>
</div>
</div>

<h3> Creating Database and Model</h3>
<div class="margin-line">

I simply navigated to <code>localhost/phpmyadmin</code> and created a database named 'rbassignment'.
Next I created a model in the cmd 
<code>php artisan make:model Question -m</code>
this will create a  model and a table named <code> questions</code>.

After specifying all of the fields in the questions table, I ran migration using
</div>
<div class="jumbotron">php artisan migrate</div>
But I got an error message 
<div class="jumbotron alert-danger">
PDOException::("SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was too long; max key length is 767 bytes")
      C:\xampp\htdocs\rbassignment1\vendor\laravel\framework\src\Illuminate\Database\Connection.php:458
</div>
<div class="margin-line">

In order to delete this error, I navigated to <code>Providers/AppServiceProvider.php </code> and added the lines as shown in the pictures below
</div>
<img src="images/db-error-removal.png" class="responsive ">
<h3> Connecting all Controller, Model and Databases</h3>
<div class="margin-line">

Since I had a table <code>questions</code>, I wanted to get questions from it and display them to a user and in order to do so I will first populate my table. Php artisan also provides a tool called <code>thinker</code>, which provided me ORM (Object Relation Mapping) and I was able tp populate my table from cmd.
Simply use the following command in the terminal
</div>
<div class="jumbotron">$php artisan thinker</div>
it prompts with a >> sign, where I can simply create a new object of Question class and add all the related data using following command
<div class="jumbotron">
<br>$ $question1 = new App\Question();
// an object of class Question has been created
<br>$ $question1->prob="First problem";
<br>$ $question1->title="Education";
<br>$ $question1->last_edit="2018-11-07";
</div>
 After adding data for all the fields we need to save this object using
 <div class="jumbotron">
 <br>$question1->save();
<div class="margin-line">

 I then  checked to see if the record has been made by
<br>App\Question::count();
</div>
</div>
<div class="margin-line">

and I was able to see this entry in the phpmyadmin as well. 
</div>
<img src="images/thinker-db.png" class="responsive">
Note all the routes can be seen by the following terminal command
<div class="margin-line">

<code>$php artisan route:list</code>
</div>
<div class="margin-line">

Moreover, I also had to define all the routes in the <span>routes/web.php</span>. Since I had a lot of controller actions in my QuestionsController I can define all of them using the following command in the <b>routes/web.app</b> file
</div>
<div class="margin-line">

<code>Route::resource('questions','QuestionsController');</code>
</div>
<img src="images/all-routes.png" class="responsive">
  <div class="margin-line">

 I then created a file for the QuestionController inside views as  question/index.blade.php.
 
 I then added the following index method inside QuestionsController
  </div>
<div class="jumbotron">
 public function index()
    <br>{
        <br>$questions = Question::all(); //will fetch all the questions from database
        <br>return view('questions.index')->with('questions', $questions);
        //redirect to the views/question/index.blade.php
        <br> }
 
 </div>


@endsection