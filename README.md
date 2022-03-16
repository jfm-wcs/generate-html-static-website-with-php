# Generate HTML static website with php

## Work

- Create your php files in the root of the folder (you can do file includes or use any other PHP function).
- Place css, js, images or other static files in the `assets` folder.

## Generate
In the `script.php` file from the `bin` folder:
- `$repos` *string*: indicate in the name of the repository on your Github account where the site will be deployed.
- `$files` *array*: indicate the names of the php files (located in the root of the project) that you want to convert into html.  
__IMPORTANT__: do not write the `.php` extension but only the name of the file (ex: `index`, `contact`, etc.)
- run the `bin/generate.sh` command in your terminal

A `docs` folder will be created in the root containing all the elements of the site. 

## Deploy with Github pages
Simply select this `docs` folder on your Github repository via the `pages` tab to deploy the site.  
[Learn more](https://docs.github.com/en/pages/getting-started-with-github-pages/configuring-a-publishing-source-for-your-github-pages-site).  
That's it!

## Example
Clone this project as an example which is deployed at https://jfm-wcs.github.io/generate-html-static-website-with-php