/*...refactoring */
//var template = {
module.exports = {
  html: function(title, list, body, link){
    return `
          <!doctype html>
          <html>
          <head>
            <title>WEB - ${title}</title>
            <meta charset="utf-8">
          </head>
          <body>
            <h1><a href="/">WEB run by PM2</a></h1>
            <h2>pm2 start main.js --watch</h2>
            <h2>pm2 log</h2>
            ${list}
            ${link}
            ${body}
          </body>
          </html>
          `;
  },
  list: function(filelist){
      var list = '<ul>';
      var i = 0;
      while(i < filelist.length){
        list = list + `<li><a href="/?id=${filelist[i]}">${filelist[i]}</a></li>`;
        i = i + 1;
      }
      list = list+'</ul>';
      return list;
  }

}

//module.exports = template;
