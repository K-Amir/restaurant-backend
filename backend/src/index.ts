import { AppDataSource } from "./db/data-source.js";
import { Server, Socket } from "socket.io";
import "reflect-metadata";
import cors from "cors";
import express, { Request, Response } from "express";
import http from "http";
const app = express();

app.use(cors);

const server = http.createServer(app);
const io = new Server(server, {
  cors: {
    origin: "*",
    methods: "*",
    allowedHeaders: ["*/*"],
  },
});

AppDataSource.initialize().then(() => {
  console.log("📚 db initialized");
});

io.on("connection", (socket: Socket) => {
  console.log("User connected to socket");

  setInterval(() => {
    socket.emit("update", "data base update");
  }, 1000);
});

app.get("/", (req: Request, res: Response) => {
  res.send("works");
});

server.listen(3000, () => {
  console.log("Backend started 💀💀");
});
