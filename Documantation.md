# Documentation of Code-Ark 2.0
![Code-Ark by codearchitect.in](code-ark.png)

## _**Features**_
#### The Removed Features are in <span style="color:red">red</span><br/> Replaced features are in <span style="color:blue">blue</span><br/> New features are in <span style="color:green">green</span>

* <span style="color:red"> Added Twig template and Twig rendered views </span><br/>
  <span style="color:blue"> There is a composer.json file so any templating engine can be added,don't have to depend on twig anymore. </span>
<br/><br/>

* <span style="color:red">Error Log</span><br/>
  <span style="color:blue"> Now we throwing exception. You can catch that exception and generate a dedicated class to show errors in your way. </span>
  <br/><br/>
  
* <span style="color:red">HTTP status code based Error</span>
<br/><br/>
  
* <span style="color:red">Custom 404 and 500 error message display page for production level</span> 
<br/><br/>

* PDO Database connection
<br/><br/>

* Pretty URLs
<br/><br/>

* PSR-1 Coding standards 
<br/><br/>

* Exception Handler and Error Handler <span style="color:blue">Throwing Exceptions</span>.
<br/><br/>
  
* Development and Production Mode
<br/><br/>

* <span style="color:green">Autoload Classes using composer</span>
<br/><br/>

* <span style="color:green">Registering Routes specifically for GET request and Post Request </span>
<br/><br/>



## **Configure** 
bla bla

## **Router**
In the routes file declare the routes like <code>$router->get('about', 'PagesController@about');</code><br/>.
Name of the route is __'about'__, the controller's name is __PagesController__, and the method responsible is __'about'__ method.<br/>
You must separate the controller and the method using __'@'__. <br/><br/>
  
************************************************************************************************************************<br>
### __Composer and Dependency__
Run the __composer dump-autoload__ command to reload any new file. Can use this to add any needed dependency.<br/>

 To add any __dependency injection__ use this code in the __bootstrap.php__ file to access it from anywhere in the application.
    <pre><code>     
        App::bind('config', require 'config.php');<br><br>
        App::bind('database', new QueryBuilder(<br>
        &nbsp;&nbsp;&nbsp;&nbsp;        Connection::make( App::get('config')['database'])<br>
        ));
    </code></pre>
 Here on the first line we are binding the dependency. In the bind(), __'config'__ is the label we are giving. Same goes 
 for the next line __database__ is just a label, and next we are creating a new QueryBuilder.<br/>
 
 In the __controllers__ directory, inside the PagesController you will see,
 <pre><code>
  public function home()<br>
     {<br>
         $articles = App::get('database')->selectAll('articals');<br> 
         return view('index');<br>
     }
 </code></pre>
 
 In here we are getting the dependency so we can use it {I know the spelling is wrong, it was intended}. The __App::get__ 
 will get the dependency according to the label.
 
 
 
************************************************************************************************************************<br>
## **Views**

Your view files are located in the views folder, and css and js files are located in to public folder.
The view files must follow a naming pattern. <code>index.view.php</code><br><br>

If you want to change this style, navigate to bootstrap.php and change the view helper function
<pre><code>
function view($name, $data)<br>
{<br>
    &nbsp;&nbsp;&nbsp;&nbsp;extract($data);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;return require "views/{$name}.view.php";<br>
}
</code></pre>



    

## **Models**

 Cache database connection
 
 Change Database information in the App/Config.php file. 

## **Exception Handler**

Converting errors into exception and then handling them, exceptions have the added benefit of having a __stack trace__, 
which is helpful when debugging.
 
 Change the __const SHOW_ERRORS__ in the config.php to toggle between development and user mode.
 
------------------------------------------------------------------------------------------------------------------------
 
 
