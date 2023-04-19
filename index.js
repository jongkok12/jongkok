


const axios = require('axios');
const cheerio = require('cheerio');
const fs = require('fs');

axios.get('https://hongkong.pools.wiki/')
  .then(response => {
    const $ = cheerio.load(response.data);
    const tableRows = $('table tr');
    const tableData = [];

    tableRows.each((i, row) => {
      const rowData = [];
      $(row).find('td').each((j, cell) => {
        rowData.push($(cell).text().trim());
      });
      if (rowData.length > 0) {
        tableData.push(rowData);
      }
    });

    const headers = tableData.shift();
    const jsonData = tableData.map(row => {
      const obj = {};
      row.forEach((cell, i) => {
        obj[headers[i]] = cell;
      });
      return obj;
    });

    const jsonString = JSON.stringify(jsonData);
    fs.writeFile('data.json', jsonString, 'utf8', err => {
      if (err) {
        console.log(err);
      } else {
        console.log('Data saved to data.json');
      }
    });
  })
  .catch(error => {
    console.log(error);
  });
