
export default function StudentLogin(props: {
    setRoute: Function
}) {
    return (
        <div className='flex gap-10 md:gap-20 flex-wrap justify-center items-center py-10 md:py-20'>
            <img
                className='h-96'
                src="/login/student-login.jpg" alt="" />

            <form className="p-5 h-fit w-full mx-3 md:w-96 border border-slate-700 rounded-md">
                <p className='text-2xl font-semibold'>Student Login</p>
                <br />
                <div className="mt-2 mb-8">
                    <input
                        required
                        type="email"
                        placeholder="Enter Email"
                        className="bg-gray-50 p-2 placeholder:text-stone-800 border border-slate-600 rounded w-full" />
                </div>
                <div className="mt-2">
                    <input
                        required
                        type="password"
                        placeholder="Enter password"
                        className="bg-gray-50 p-2 placeholder:text-stone-800 border border-slate-600 rounded w-full" />
                </div>
                <div className="flex justify-center items-center mt-9">
                    <button type="submit" className="px-10 text-white text-lg tracking-wide font-semibold py-1.5 bg-blue-950 rounded-md">Login</button>
                </div>

                <div className="flex justify-center items-center mt-5">
                    <p>Dont have an account ? <span className="text-blue-700 cursor-pointer font-semibold tracking-wide underline" onClick={() => props.setRoute(false)}>Register</span></p>
                </div>

            </form>
        </div>
    )
}
