import express, { Router } from "express";
import jwt from "../middlewares/jwtHelper.js";
import roomRouter from "./room/room.routes.js";
import userRouter from "./user/user.routes.js";
import tableRouter from "./table/table.routes.js";
import restaurantRouter from "./restaurant/restaurant.routes.js";
import bookingRouter from "./booking/booking.routes.js";
import opinionsRouter from "./opinion/opinion.routes.js";
import authRouter from "./auth/auth.routes.js";
import verifyToken from "../middlewares/tokenHelper.js";

const app = express();
const apiRouter = Router();
const prefix = Router()
apiRouter.use(authRouter);
apiRouter.use(verifyToken,roomRouter);
apiRouter.use(verifyToken,userRouter);
apiRouter.use(verifyToken,tableRouter);
apiRouter.use(verifyToken,restaurantRouter);
apiRouter.use(verifyToken,bookingRouter);
apiRouter.use(verifyToken,opinionsRouter);
prefix.use("/api/v1/", jwt, apiRouter);

app.use(prefix);

export default app;
