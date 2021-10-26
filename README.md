## Coding Terms
 A project to define coding terms.
 
 This repo serves as the build system for both generating the [markdown](https://github.com/EDDYMENS/coding-terms-markdown) and [production site](https://github.com/EDDYMENS/coding-terms-site) for the project.


 ## Setting up the build system
- Be sure to have [composer](https://getcomposer.org/download), [PHP ^7.3|^8.0](https://www.php.net)  installed.
- Clone the [coding terms build repo](https://github.com/EDDYMENS/coding-terms-build). This one 🙂.
- Run `composer install` to install all required dependencies.
- To start the server run `php artisan serve`.

 ## Adding a new term

You will find all terms in the `/resources/views/markdown` folder. Each term definition is a markdown file.

Here are a few things to note when adding new terms:
- The term to be defined should be the name of the markdown file.
 - When naming files, use hyphens (-) to separate multi-word terms. Eg: `work-in-progress.md`.
 - use lower case when naming a file.
 - The content of the markdown file should have three parts a **definition**, use **case/example** and **summary**. The summary is, however, optional.

 In other to reference a term use the special helper `{{linkToPost('<referenced_term>')}}`. This will only convert to an href link if a corresponding markdown file is found. 

Meaning you can reference non-existing terms and define them later. 

 To view referenced but yet to be defined term use the following steps: 

 - Run `php artisan tinker`
 - Type out the function `undefinedLinks()` to view the list of undefined terms.

 ## Generating markdown
The source markdown files found in `/resources/views/markdown` may contain helper tags which might make reading them a bit difficult.

Running the command `php artisan markdown:generate <outputPath>` will parse all the markdown files and store them in the provided output path. 

[coding terms markdown repo.](https://github.com/EDDYMENS/coding-terms-markdown) stores an up-to-date copy of the parsed markdown files.

 ## Generating production site
There is a hosted version of the project at https://codingterms.com

The HTML files are generated using `WGET` and pushed to the [coding terms site repo](https://github.com/EDDYMENS/coding-terms-site).

Follow these steps to generate an updated version of the HTML files whenever you make changes:

- Be sure the build server is running `php artisan serve`
- Clone the [coding terms site repo](https://github.com/EDDYMENS/coding-terms-site) repo.
- Be sure you are outside the build repo.
- Then run `WGET` to generate the HTML site. E.g.: Assuming the build is running on port 8000 `wget -mpEk -nH  -P <coding terms site repo> http://localhost:8000`.
- Open a pull request to merge your changes into the [coding terms site repo](https://github.com/EDDYMENS/coding-terms-site).