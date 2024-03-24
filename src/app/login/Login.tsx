import { useState } from "react"
import StudentLogin from "./StudentLogin"
import StudentRegister from "./StudentRegister"

export default function Login() {

    const [route, setRoute] = useState<boolean>(true)

    return (
        <div className="flex justify-center items-center h-screen">
            {
                route ? <StudentLogin setRoute={setRoute} /> : <StudentRegister setRoute={setRoute}  />
            }
        </div >
    )
}
