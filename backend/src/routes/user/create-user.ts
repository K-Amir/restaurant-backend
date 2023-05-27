import { Request, Response } from "express";
import { AppDataSource } from "../../db/data-source.js";
import { User } from "../../db/entity/user.js";
import { io } from "../../index.js";

const usersRepo = AppDataSource.getRepository(User);

const createUser = async (req: Request, res: Response) => {
  const {
    username,
    email,
    phoneNumber,
    password,
    role,
    profileImage,
    device,
    token,
  } = req.body;

  const createdUser = await usersRepo.save({
    username,
    email,
    phoneNumber,
    password,
    role,
    profileImage,
    device,
    token,
  });

  io.emit("update", createdUser);

  res.send({
    success: "User created successfully",
  });
};

export default createUser;
