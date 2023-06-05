import express from "express";
import "reflect-metadata";
import bodyParser from "body-parser";
import cors from "cors";
import { Server } from "socket.io";
import http from "http";


const app = express();
const server = http.createServer(app);

export const io = new Server(server, {
  cors: {
    origin: "*",
  },
});

// Middleware
app.use(bodyParser.json());
app.use(cors());

export default app

