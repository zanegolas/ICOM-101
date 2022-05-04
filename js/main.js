// Formatting
//-----------------------------------------------------
const OUTPUT_STRING = "  ";

var glow = function (text) {
  return "[[g;#EEEEEE;]" + text + "]";
};

var titleText = function (text) {
  return "[[u;inherit;]" + text + "]";
};

function teal(message) {
  return "[[gb;red;black]" + message + "]";
}
//-----------------------------------------------------

var banner = teal(
  "                __           ____  _____\n" +
    "   ____ _____  / /___ ______/ __ \\/ ___/\n" +
    "  / __ `/ __ \\/ / __ `/ ___/ / / /\\__ \\ \n" +
    " / /_/ / /_/ / / /_/ (__  ) /_/ /___/ / \n" +
    " \\__, /\\____/_/\\__,_/____/\\____//____/  \n" +
    "/____/                                  \n" +
    "                                                          \n" +
    "      Terminal v.01." +
    getYear() +
    "                                   \n\n\n"
);

const welcomeMessage = `Connection to server established successfully.
Type 'help' to view a list of available commands.
`;
const starWarsMessage = `Star Wars: Episode IV produced by Simon Jansen (http://www.asciimation.co.nz)
Press ctrl + z to stop.`;
// Boolean to keep track of whether Star Wars is animating
var play = false;




function downloadURI(uri, name) {
  var link = document.createElement("a");
  link.download = name;
  link.href = uri;
  link.click();
}


function getAge(dateString) {
  var today = new Date();
  var birthDate = new Date(dateString);
  var age = today.getFullYear() - birthDate.getFullYear();
  var m = today.getMonth() - birthDate.getMonth();
  if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
    age--;
  }
  return age;
}

function getYear() {
  var today = new Date();
  return today.getFullYear();
}
const messages = {
  repo: `
${OUTPUT_STRING} https://github.com/zanegolas
${OUTPUT_STRING} https://soundcloud.com/zane-golas
`,
  help: `
Just type any of the commands below to get some more info. You can even type a few letters and press [tab] to autocomplete.

${OUTPUT_STRING}${glow("about")}              - Stop stalking me
${OUTPUT_STRING}${glow("star_wars")}          - Please don't sue me george
${OUTPUT_STRING}${glow("repo")}               - Take a look at some of my work
${OUTPUT_STRING}${glow("contact")}            - Bring on the spam

`,
  about: `
Zane Golas is a Music Technology BFA student at CalArts.
`,
  projects: `
Not public yet
`,
  skills: `
${OUTPUT_STRING}${glow(
    "Ableton"
  )}              ##  [[g;#00DE12;]#################################################]  ##
${OUTPUT_STRING}${glow(
    "Protools"
  )}             ##  [[g;#42D100;]###############################################]    ##
${OUTPUT_STRING}${glow(
    "C++"
  )}                  ##  [[g;#5BD100;]############################################]       ##
${OUTPUT_STRING}${glow(
    "Max MSP"
  )}              ##  [[g;#D16200;]###########]                                        ##
${OUTPUT_STRING}${glow(
    "Python"
  )}               ##  [[g;#99D100;]#########################################]          ##
${OUTPUT_STRING}${glow(
    "Javascript"
  )}           ##  [[g;#D1B900;]############################]                       ##
`,
  contact: `
${OUTPUT_STRING}${glow("Email")}            - zane@golas.dev
${OUTPUT_STRING}${glow("Location")}		 - los angeles
${OUTPUT_STRING}${glow("myspace")}          - just kidding
`,


};

var commands = {
  help: function () {
    this.echo(messages.help);
  },

  repo: function () {
    this.echo(messages.repo);
  },

  about: function () {
    this.echo(messages.about);
  },

  projects: function () {
    this.echo(messages.projects);
  },

  skills: function () {
    this.echo(messages.skills);
  },

  contact: function () {
    this.echo(messages.contact);
  },

  credits: function () {
    this.echo(messages.credits);
  },





  all: function () {
    this.clear();
    this.exec("about");
    this.exec("projects");
    this.exec("skills");
    this.exec("repo");
    this.exec("contact");
  },

  clear: function () {
    this.clear();

    this.echo(banner);
    play ? this.echo(starWarsMessage + "\n\n") : this.echo(welcomeMessage);
  },


  star_wars: function () {
    initStarWars(this);
  },
};



$(function () {
  var isTyping = false;
  function typed(finish_typing) {
    return function (term, message, delay) {
      isTyping = true;
      var prompt = term.get_prompt();
      var c = 0;
      if (message.length > 0) {
        term.set_prompt("");
        var interval = setInterval(function () {
          term.insert(message[c++]);
          if (c == message.length) {
            clearInterval(interval);
            // execute in next interval
            setTimeout(function () {
              // swap command with prompt
              finish_typing(term, message, prompt);
              isTyping = false;
            }, delay);
          }
        }, delay);
      }
    };
  }

  var typed_message = typed(function (term, message, prompt) {
    term.set_command("");
    term.echo(message);
    term.set_prompt(prompt);
  });

  $("body").terminal(commands, {
    greetings: banner,
    prompt: "> ",
    completion: true,
    checkArity: false,
    clear: false,

    onInit: function (term) {
      typed_message(term, welcomeMessage, 0, function () {});
    },

    keydown: function (e) {        
      // ctrl-z - Stop Star Wars
      if (e.which == 90 && e.ctrlKey) {
        play = false;
        return false;
      }

      if (play) {
        return false;
      }

      if (isTyping) {
        return false;
      }
    },

    keypress: function (e, term) {
      console.log("keypress: " + e.which);
    },

    onFocus: function (term) {
      console.log("terminal has gained focus");
    },

    onBlur: function () {
      console.log("terminal has lost focus");
    },
  });
});



var frames = [];
var LINES_PER_FRAME = 14;
var DELAY = 67;

initStarWars = function (term) {
  if (frames.length == 0 && play == false) {
    term.echo("Loading...");
    $.getScript("js/star_wars.js").done(function () {
      play = true;
      var lines = star_wars.length;
      for (var i = 0; i < lines; i += LINES_PER_FRAME) {
        frames.push(star_wars.slice(i, i + LINES_PER_FRAME));
      }

      playStarWars(term);
    });
  } else {
    // frames have already been loaded
    play = true;
    playStarWars(term);
  }
};

playStarWars = function (term, delay) {
  var i = 0;
  var next_delay;
  if (delay == undefined) {
    delay = DELAY;
  }

  function display() {
    if (i == frames.length) {
      i = 0;
    }

    term.clear();

    if (frames[i][0].match(/[0-9]+/)) {
      next_delay = frames[i][0] * delay;
    } else {
      next_delay = delay;
    }
    term.echo(frames[i++].slice(1).join("\n") + "\n");
    if (play) {
      setTimeout(display, next_delay);
    } else {
      term.clear();
      i = 0;
    }
  }

  display();
};


