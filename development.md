# Test Webapp development
To begin my PHP development phase, I was tasked with developing a simple web app.
In this case, I was tasked with creating a one-page web app.

# Deliverables
I was only asked to make a simple one-page web app, and given no further guidance.
So, to challenge myself I set some custom deliverables:

## Dynamic Welcoming
Throughout the day, when greeting someone, you either say 'Good Morning', 'Good Afternoon', etc.
I wanted the site to replicate this behaviour, and this is something I have implemented into some of my personal projects, though in JavaScript.
To do this, I grab the hour from the `date()` function, convert it to an integer and do some checking.

This was a relatively simple thing to implement.

## Login & Logout
To practie sessions and DB queries, I implemented a login and logout system.
I had some issues originally in doing password validation, but fixed my SQL query and used the `password_verify()` function.

# Issues
During development, WAMP, and subsequently XAMPP went kaputt on my main machine at home.
So I moved to just using VS Code and XAMPP on my Ubuntu laptop, as this was a functional development environment, though not ideal.

While I have yet to deploy the Web App in a Docker Container on my VPS, I assume it will be without much difficulty.

# What Was Learned
I learned the basics of PHP, and the XAMPP stack, as well as some very small best-practices (at least I hope).

PHP, despite being mature, is still quite powerful and incredibly versatile.