const express = require('express');
const app = express();
const port = 3000;

const jsonData = require('./data.json');

app.get('/data', (req, res) => {
  res.json(jsonData);
});

app.listen(port, () => {
  console.log(`Aplikasi berjalan di http://localhost:${port}`);
});
