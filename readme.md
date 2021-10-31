# Headless theme for WordPress

All that is needed to adapt this theme is to edit the style.css to link to the parent theme of your choosing.

What this theme does is prevent access to the front end unless the user is logged in. The idea being that this is used as a Headless CMS.

i.e. the CMS is at https://cms.example.com but the actual website is at https://example.com and use either GraphQL or the REST api to get the content.