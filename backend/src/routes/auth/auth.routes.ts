import { Router } from "express";
import login from "./login.js";

const router = Router();

router.get("/auth", login);

export default router;
