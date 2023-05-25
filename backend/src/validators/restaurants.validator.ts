import { check } from "express-validator";
import validateResult from "../helpers/validateHelper.js";
import { Request, Response, NextFunction } from "express";

const validateCreate = [
  check("restaurantName").exists(),
  check("email").isEmail(),
  check("password").isStrongPassword({
    minLength: 8,
  }),
  (req: Request, res: Response, next: NextFunction) => {
    validateResult(req, res, next);
  },
];

export default validateCreate;
