
import { Link } from 'react-router-dom'

export default function Navabr() {

  const links: string[] = [
    "",
    "about",
    "job-fair",
    "pool-campus",
    "contact",
    "login",
    "student",
    "admin-login",
    "admin",
 
  ]

  return (
    <nav className='flex fixed top-0 left-0 w-screen bg-white justify-between items-center px-10 shadow-md shadow-slate-300 py-2'>

      <a href="/">
        <img src="/logo.jpeg" alt="" className='h-14 w-48' />
      </a>

      <ul className='flex gap-10'>
        {
          links.map((a, i) => {
            return <Link className='capitalize text-lg' key={i} to={"/" + a}>
              {a === "" ? "home" : a.replace("-", " ")}
            </Link>
          })
        }
      </ul>

    </nav>
  )
}
