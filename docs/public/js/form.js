var codebarConfig = {
  "browsers": {
    "chrome": null,
    "safari": true,
    "ff": true,
    "ie": true,
    "edge": true
  },
  "players": {
    "developer": {
      "name": "Sivan",
      "url": "http://codepen.io/sivan/"
    },
    "designer": false
  },
  "ui": {
    "theme": "dark"
  }
};

$('.form-js-label').find('input').on('input', function (e) {
  $(e.currentTarget).attr('data-empty', !e.currentTarget.value);
});
