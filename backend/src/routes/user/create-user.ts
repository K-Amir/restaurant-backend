import { Request, Response } from "express";
import { AppDataSource } from "../../db/data-source.js";
import { User } from "../../db/entity/user.js";
import { io } from "../../index.js";
import bcrypt from "bcrypt";

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

  const encryptedPassword = await bcrypt.hash(password, 10);

  const createdUser = await usersRepo.save({
    username,
    email,
    phoneNumber,
    password: encryptedPassword,
    role,
    profileImage,
    device,
    token,
  });

  io.emit("updateNewUser", createdUser);

  res.send({
    success: "User created successfully",
  });
};

export default createUser;
