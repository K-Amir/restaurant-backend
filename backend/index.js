import http from "http";
import app from "./dist/app.js";
import { AppDataSource } from "./dist/db/data-source.js";
import path from 'path';
import { fileURLToPath } from 'url';
import routes from "./dist/routes/routes.js";

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

const server = http.createServer(app);
const port = process.env.PORT || 4000;

// Database
AppDataSource.initialize();

// Routes
app.use(routes);
app.use("/", (req, res) => {
    const indexPath = path.join(__dirname, './dist/public/index.html');
    res.sendFile(indexPath);
  });

// Port
server.listen(port);

console.log("Listening on port " + port);
