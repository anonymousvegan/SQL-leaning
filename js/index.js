import mysql  from 'mysql';

var connection = mysql.createConnection({
  host     : 'localhost',
  user     : 'nikola',
  password : 'nikola',
  database : 'learning'
});

connection.connect(function(err) {
    if (err) {
      console.error('error connecting: ' + err.stack);
      return;
    }
    console.log('connected as id ' + connection.threadId);
});
