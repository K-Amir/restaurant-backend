import { Router } from "express";
import getUserById from "./get-user.js";
import getAllUsers from "./get-all-users.js";
import createUser from "./create-user.js";
import deleteUser from "./delete-user.js";
import updateUserById from "./update-user.js";
import validateNewUser from "../../validators/user.validator.js";

const router = Router();

router.get("/users", getAllUsers);
router.get("/users/:id", getUserById);
router.post("/register", validateNewUser, createUser);
router.delete("/delete_user/:id", deleteUser);
router.put("/update_user/:id", updateUserById)

export default router;
