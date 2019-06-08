# fmblog-backend-starter

This project is based on [Angular Framework](https://github.com/angular/angular).
Currently supported version is 7.2.14 and will support upcoming versions. This projects
is the frontend of [fmblog-backend-starter](https://github.com/bwqr/fmblog-backend-starter)

This projects gives you ability to create a CMS application like wordpress, but not that much powerful.
Though it supports basic functionalities of a CMS, it is enough to enable my customers
to use and manage their site without contacting a developer full time.
Since it has a modular structure, you can easily add or remove modules
from app and enrich your abilities. There are some basic modules that I have written which are
indicated at below. Since installing this application needs lots of configuration and tweaking, I created this repo
to make it easy. If you have any question or suggestion, you can create issue. Foreach frontend module,
there exists a backend module to support its functionalities.


### Modules
1. [Angular-Module-Core](https://github.com/bwqr/Angular-Module-Core)
2. [Angular-Module-Admin](https://github.com/bwqr/Angular-Module-Admin)
3. [Angular-Module-Auth](https://github.com/bwqr/Angular-Module-Auth)
4. [Angular-Module-Article](https://github.com/bwqr/Angular-Module-Article)
5. [Angular-Module-User](https://github.com/bwqr/Angular-Module-User)
6. [Angular-Module-Image](https://github.com/bwqr/Angular-Module-Image)
7. [fmblog-frontend-shared](https://github.com/bwqr/fmblog-frontend-shared)
8. [fmblog-frontend-navigation](https://github.com/bwqr/fmblog-frontend-navigation)

### Installation
Since this repo is already configured for serving, you should only install the modules.
First module that you should install is Laravel-Module-Core. You can find installation 
instructions inside the modules. And since application is based on user authentication.
You should also install Laravel-Module-Auth and Laravel-Module-Admin.

### Modules Details
1. Angular-Module-Core  
This module supports request services, caching and
some other helpers that are used generally by other modules.
2. Angular-Module-Admin  
This module enables you to manage apps settings, like roles, users, menus, permissions,
languages and categories. 
   1. Roles: You can assign one user to one role. Each role has its own permissions. With these permissions, you can define a user capabilities.
   2. Menus: These are the navigation of your application. You can assign one menu to multiple roles.
   The user who is in one of the role, can see this menu at his/her UI and navigate to it.
   3. Languages: You can define supported languages. And most of the features have multilingual support.
   4. Categories: This is used by Article Module. While creating article, you can assign it to multiple categories.
3. Angular-Module-Auth
This module supports authentication and will enable user to login, logout, and register. Currently register function is enabled for only admin role.
4. Angular-Module-Article
This module enables you to create and edit articles. Also you can create pages with Article Module.
To do that, create an article, then create a menu which's url directed to this article slug.
5.Angular-Module-User
User can edit their profile with this module. This modules also needed for retrieving 
menus according to user's role and languages, which is not relevant to role.
6. Angular-Module_Image
This module gives you to add and edit images into application. You can access them in the
application by using appropriate url.
7. fmblog-frontend-shared
This module support the commonly used pipes, dialogs, components and @angular/material modules.
8. fmblog-frontend-navigation
This module create navigation headers around the UI.
### Configurations

Inside the environment files, you should define your endpoint API URI.