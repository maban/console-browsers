console-browsers
================

A collection of information about the browsers on game consoles. Includes browser stats and descriptions of some of the quirks.

## How you can help

### Run these tests on your console browser

When running a test such as the HTML5, CSS3 or Acid3 test, leave the page open for around 5 minutes. This is because it takes so long to load scripts. Often the device will display a score and will have appear to have finished running, but a couple of minutes later, that score changes.

* [Support Details](http://supportdetails.com/)
* [CSS3 Test](http://css3test.com)
* [HTML5 Test](http://html5test.com)
* [Palm Reader](http://www.jordanm.co.uk/palmreader)


### Contribute your data

If you'd like to update the console browser data with your own, you can either edit the device file using the built-in editor in Github, or clone the repo to your machine. When updating stats, it would really help if you could leave the old stats in, but cross them out using the `s` tag to show how the stats have changed over time.

#### To edit the file on GitHub

* Navigate to the device's index.html file. For example, if you'd like to edit the data for the Wii, go to `device/wii/index.html`.
* Click "Edit"
* Make your changes
* Leave a useful commit message explaining what you've done.

#### To edit the files locally on a Mac

The site uses Jekyll for templating, so you'll need to set this up.

* Clone the GitHub repository
* Open up Terminal and type `gem install jekyll`
* In Terminal, navigate to where you cloned the site, eg: `cd Sites/console-browser`
* Once you're in the right folder, type `jekyll serve --watch` in Terminal. This will run Jekyll and watch for changes you make. 
* To view the site locally, type `http://0.0.0.0:4000/` in your browser's address bar.

A `_site` folder will be generated where all the static files are output. This is ignored in the .gitignore file because GitHub Pages builds the files itself.


### Donate Devices

All of the devices, except the ones I've borrowed like the Wii, Xbox and PS3, live in [Clearleft's test lab](http://clearleft.com/does/test-lab/) which is open for anyone to drop by and use. I've bought most of the consoles on this site, although a couple have been kindly donated.

If you'd like to contribute, or if you already own one of these devices and you don't want it any more, please have a look at my [wishlist of consoles and peripherals I don't yet have in the test lab](http://www.amazon.co.uk/registry/wishlist/1QGHF0I6T29TR). [Post it to Clearleft](http://clearleft.com/canhelp/) to form part of their test lab, and I'll run lots of tests on it and document them on this site. I look for second-hand models with all the cables. I got the PS Vita for a bargain because it had a dead pixel. The DSi was missing the box and the stylus, but it doesn't matter as long as all the buttons and screen work so I can properly test the browser in them.