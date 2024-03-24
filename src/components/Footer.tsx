

export default function Footer() {
  return (

    <div className="">
      <div className="h-96 w-screen">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d18864.85154715454!2d73.38935039936521!3d18.753982274120364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1711192032674!5m2!1sen!2sin"
          style={{ border: "0" }}
          className='h-full w-full'
          loading="lazy"
          referrerPolicy="no-referrer-when-downgrade">
        </iframe>
      </div>

      <div className="px-10 md:px-48 grid grid-cols-3 gap-20 bg-[#120a3c] text-white py-10">
        <div className="">
          <div className="flex gap-3 items-center">
            <img src="/logo.webp" className='h-16 w-16' alt="" />
            <p className='text-4xl font-semibold text-white'>PCCCS</p>
          </div>
          <p className='mt-3'>
            Block D- III, Plot no. 3, Behind Mehta Hospital,
            Off Pune Mumbai Road Chinchwad Station, Pune, Maharashtra 411019
          </p>

          <div className="mt-3">
            <p className='flex gap-3 items-center mt-2'>
              <i className="bi bi-telephone-fill"></i>
              <span>8600100945</span>
            </p>
            <p className='flex gap-3 items-center mt-2'>
              <i className="bi bi-telephone-fill"></i>
              <span>8600100945</span>
            </p>
            <p className='flex gap-3 items-center mt-2'>
              <i className="bi bi-envelope-fill"></i>
              <span>asdjnajskdkasjb.com</span>
            </p>
          </div>

        </div>
        <div className="">
          <p className="text-2xl tracking-wide font-semibold">Links</p>
          <br />
          <div className="flex flex-col gap-2 text-lg">
            <a href="" className="hover:ml-2 block transition-all font-semibold hover:text-slate-300">Home</a>
            <a href="" className="hover:ml-2 block transition-all font-semibold hover:text-slate-300">About</a>
            <a href="" className="hover:ml-2 block transition-all font-semibold hover:text-slate-300">Contact</a>
            <a href="" className="hover:ml-2 block transition-all font-semibold hover:text-slate-300">Job Fair</a>
            <a href="" className="hover:ml-2 block transition-all font-semibold hover:text-slate-300"></a>
            <a href="" className="hover:ml-2 block transition-all font-semibold hover:text-slate-300">Admin</a>
          </div>
        </div>
        <div className="">
          <p className="text-2xl tracking-wide font-semibold">Other Links</p>
          <br />
          <p className="text-xl">Follow us here</p>
          <div className="flex gap-6 text-2xl mt-5">
            <a href="https://" target="_blank">
              <i className="bi bi-instagram"></i>
            </a>
            <a href="https://" target="_blank">
              <i className="bi bi-twitter-x"></i>
            </a>
            <a href="https://" target="_blank">
              <i className="bi bi-linkedin"></i>
            </a>
            <a href="https://" target="_blank">
              <i className="bi bi-facebook"></i>
            </a>
          </div>
        </div>
      </div>

    </div>

  )
}
