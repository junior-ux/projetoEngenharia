const http = require('http')

const server = http.createServer((req, res) => {
    res.end('<h1>Foi</h1>')
})

server.listen(3001, 'localhost', () => {
    console.log('Servidor de pe em http://localhost:3001')
    console.log('Para deslligar o nosso srvido: ctrl+c')
})