import { BrowserRouter, Route, Routes } from "react-router-dom"
import "./App.css"
import Home from "./app/Home"
import Navbar from "./components/Navbar"
import Footer from "./components/Footer"
import Contact from "./app/contact/Contact"
import Login from "./app/login/Login"
import JobFair from "./app/job-fair/JobFair"
import Student from "./app/student/Student"
import PoolCampus from "./app/pool-campus/PoolCampus"
import Admin from "./app/admin/Admin"
import AdminLogin from "./app/admin-login/AdminLogin"
import StudentApplication from "./app/student-application/StudentApplication"
import AddCompanies from "./app/add-companies/AddCompanies"

export default function App() {
  return (
    <div>
      <BrowserRouter>
        <Navbar />
        <Routes>
          <Route path="/" Component={Home} />
          <Route path="/contact" Component={Contact} />
          <Route path="/job-fair" Component={JobFair} />
          <Route path="/login" Component={Login} />
          <Route path="/student" Component={Student} />
          <Route path="/pool-campus" Component={PoolCampus} />
          <Route path="/admin-login" Component={AdminLogin} />
          <Route path="/admin" Component={Admin} />
          <Route path="/student-application" Component={StudentApplication} />
          <Route path="/add-companies" Component={AddCompanies} />
        </Routes>
        <Footer />
      </BrowserRouter>
    </div>
  )
}
