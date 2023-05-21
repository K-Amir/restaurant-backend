import "reflect-metadata";
import express, { Request, Response } from "express";
import { AppDataSource } from "./db/data-source.js";

const app = express();

app.get("/", (req: Request, res: Response) => {
  res.send("works");
});

app.listen(3000, () => {
  console.log("server is working");
});

AppDataSource.initialize().then(() => {
  console.log("db initialized");
});
