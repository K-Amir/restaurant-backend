import { Router } from "express";
import login from "./login.js";
import createUser from "../user/create-user.js";
import validateNewUser from "../../validators/user.validator.js";

const router = Router();

router.post("/login", login);
router.post("/register",validateNewUser ,createUser)

export default router;
