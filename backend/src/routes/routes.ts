import { Router } from "express"
import userRouter from "./user/user.routes.js"
import restaurantRouter from "./restaurant/restaurant.routes.js"
import tableRouter from "./table/table.routes.js"

const apiRuter = Router()
const routes = Router();

routes.use('/api/v1', apiRuter)

apiRuter.use(userRouter)
apiRuter.use(restaurantRouter)
apiRuter.use(tableRouter)

export default  routes