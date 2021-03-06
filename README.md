# wp-react-plugin

Develop React apps easily inside of WordPress with this plugin. Uses [React Hot Loader](https://github.com/gaearon/react-hot-loader) internally to update changes in real time while also preserving React state.


## Installation

Inside `/wp-content/plugins/`

Activate the plugin.

This plugin supports using React on the front end and on a specific admin page (the plugin options page).

### WordPress Admin

Go to Settings > RWP Plugin in the WordPress admin to access the plugin options page. Here you'll see a very simple React app as a placeholder for your own code.

### Front End

The React app is a stand alone app so can be loaded on the front end too! Simply add an empty element to the new WordPress (5.0+) editor with CSS class name `wp-react-plugin`. Save the page and view on the front end to display the React app.

## Developing Your Own React Apps

By running `npm run dev` your files will be watched by webpack for changes in real time. As soon as a change is made to a JavaScript (or JSX) file, and saved, the React app is automatically updated in the browser window. And because RHL is used then React state is preserved too!

Note: Running `npm run dev` deletes the `/dist` folder so don't forget to run `npm run prod` to create the final versions of your files. Otherwise your React app won't be available outside of `npm run dev`.

Also, try editing App.scss to see styles updated almost instantly.
