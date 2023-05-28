import { Router } from "express";
import login from "./login.js";

const router = Router();

router.get("/login", login);

export default router;
