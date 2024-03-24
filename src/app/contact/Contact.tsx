import AllHomeHeroComponent from "../../components/AllHomeHeroComponent";



export default function Contact() {
    return (
        <div>

            <AllHomeHeroComponent >
                <p className='text-5xl font-bold mt-3 text-center leading-tight'>
                    Contact Us
                </p>
            </AllHomeHeroComponent >

            {/* -------------------------------------------------------------------------------- */}

            <div className="px-40 py-20">
                <p className="text-xl">Have more questions?</p>
                <p className="text-5xl font-bold">Connect With Us?</p>

                <div className="">
                    <div className="mt-10">
                        <p className='flex gap-3 items-center mt-2'>
                            <i className="bi bi-geo-alt-fill"></i>
                            <span>Block D- III, Plot no. 3, Behind Mehta Hospital,
                                Off Pune Mumbai Road Chinchwad, station, Pune, Maharashtra 411019</span>
                        </p>
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

                <div className="mt-8">
                    <p className="py-2 text-xl font-semibold">Social Media</p>
                    <div className="flex gap-8 items-center text-2xl">
                        <a href="#">
                            <i className="bi bi-facebook"></i>
                        </a>
                        <a href="#">
                            <i className="bi bi-linkedin"></i>
                        </a>
                        <a href="#">
                            <i className="bi bi-twitter"></i>
                        </a>
                        <a href="#">
                            <i className="bi bi-instagram"></i>
                        </a>
                    </div>
                </div>

                <form action="index.php" className="mt-10">
                    <div className="">
                        <p className="text-2xl"> Your Details</p>
                        <p className=""> Let us know how to get back to you.</p>
                    </div>
                    <br />
                    <div className="mb-9">
                        <input type="text"
                            placeholder="Enter Name"
                            className="bg-gray-50 p-2.5 placeholder:text-lg border border-slate-600 rounded-md w-full" />
                    </div>
                    <div className="mb-9">
                        <input type="text"
                            placeholder="Enter Email"
                            className="bg-gray-50 p-2.5 placeholder:text-lg border border-slate-600 rounded-md w-full" />
                    </div>
                    <div className="mb-9">
                        <input type="text"
                            placeholder="Enter Phone"
                            className="bg-gray-50 p-2.5 placeholder:text-lg border border-slate-600 rounded-md w-full" />
                    </div>
                    <div className="mb-9">
                        <input type="text"
                            placeholder="Enter Subject"
                            className="bg-gray-50 p-2.5 placeholder:text-lg border border-slate-600 rounded-md w-full" />
                    </div>
                    <div className="mb-9">
                        <textarea name=""
                            placeholder="Enter Subject"
                            className="bg-gray-50 p-2.5 placeholder:text-lg border border-slate-600 rounded-md w-full"
                            rows={4}></textarea>
                    </div>
                    <div className="flex justify-center items-center">
                        <button type="submit" className="px-10 text-white text-lg tracking-wide font-semibold py-2 bg-blue-950 rounded-md">Submit</button>
                    </div>



                </form>

            </div >


            {/* -------------------------------------------------------------------------------- */}


        </div >
    )
}
