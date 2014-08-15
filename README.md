Bronson Rock
==========
A Custom Wordpress Theme for Bronson Rock
info@paradoxsites.com

This is a private repo for a Paradox client.

How to setup locally
-------
1. In Terminal:
```
$ cd /path/to/your/projects
$ git clone https://github.com/TyRichards/bronson_rock.git
```
2. Setup MAMP with host nick.bronsonrocktx.com
3. Find database in /wp-content/uploads/wp-migrate-db-pro/(latest-db)
4. Import database into local phpmyadmin/mysql setup
5. Setup wp-config.php file to read like this:
```
/** The name of the database for WordPress */
define('DB_NAME', 'wp_bronsonrock');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'your_MAMP_mysql_password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Set Site Url */
define('WP_HOME','http://nick.bronsonrocktx.com/');
define('WP_SITEURL','http://nick.bronsonrocktx.com/');
```
6. Start MAMP server and open nick.bronsonrocktx.com in a browser - should work fine
7. You should be able to login to /wp-admin with: 
u: Nick Meagher
p: u: Nick Meagher
p: zDd84vWwGk
8. Start new git branch
```
$ git status # to verify that you are on master branch
$ git checkout -b eventPosts master # to create a new feature branch called "eventPosts" based on master
$ git status # to verify that you are now working in "eventPosts" branch
$ git push --set-upstream origin testFeature # allows you to push that branch to Github origin
```
9. Do your thang (to-do's below)
10. Do the Git Dance periodically:
```
$ git status # to see what you've changed
$ git add . # to add any new files
$ git commit -am "Notes of what you did"
$ git push # to push your eventPosts feature branch to Github 
```
11. When feature is completed, backup database before you do one final push to github
* Login to /wp-admin
* Go to Tools > Migrate DB Pro > Click "Backup: Nick > Ty" (puts backup db in uploads folder)
* Press blue "Migrate DB & Save" button (wait for it to finish)
* `$ git add .`
* `$ git commit -am "Backup Database for eventPosts"`
* `$ git push` # to push eventPosts branch to Github
* `$ git checkout master` # to move back to master branch
* `$ git merge --no-ff eventPosts` to merge eventPosts branch changes over to Master
* `$ git add .`
* `$ git commit -am "merge eventPosts branch"`
* `$ git push` to push new master branch up to Github

12. Buy a beer for yourself!

To Do:
-------

### Event Custom Post Type

Meta Fields: 
* Title (textfield)
* Event Date (datepicker or select fields)
* Time (select field)
* URL (http:// textfield)

Home Page (page-home.php)
* Front-end code completed
* Fill in backend logic for 4 latest events (or plugin - use your judgement)

Event Archive (archive-event.php)
* Make layout single column 4 or 6 wide centered (same styling as right column on home page)
* Limit to 15 events
* Paginate using bootstrap style pagination

(Styled with sass. You shouldn't have to add style for this to-do, but if you do add it to shame.css with some notes)