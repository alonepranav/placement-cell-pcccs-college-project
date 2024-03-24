

export default function StudentRegister(props: {
    setRoute: Function
}) {
    return (
        <div className='flex gap-10 md:gap-20 flex-wrap justify-center items-center py-10 md:py-20'>
            <img
                className='h-96'
                src="/student-registration/std-reg.png" alt="" />

            <form className="p-5 h-fit w-full mx-3 md:w-96 border border-slate-700 rounded-md">
                <p className='text-2xl font-semibold'>Student Registration</p>
                <br />
                <div className="mt-2 mb-4">
                    <input
                        required
                        type="email"
                        placeholder="Enter Name"
                        className="bg-gray-50 p-2 placeholder:text-stone-800 border border-slate-600 rounded w-full" />
                </div>
                <div className="mt-2 mb-4">
                    <input
                        required
                        type="email"
                        placeholder="Enter Email"
                        className="bg-gray-50 p-2 placeholder:text-stone-800 border border-slate-600 rounded w-full" />
                </div>
                <div className="mt-2 mb-4">
                    <select
                        className="bg-gray-50 p-2 placeholder:text-stone-800 border border-slate-600 rounded w-full"
                        name="">
                        <option value="">Select Option</option>
                        <option value="">TY BSC CS</option>
                        <option value="">SY BSC CS</option>
                        <option value="">FY BSC CS</option>
                    </select>
                </div>
                <div className="mt-2">
                    <input
                        required
                        type="password"
                        placeholder="Enter password"
                        className="bg-gray-50 p-2 placeholder:text-stone-800 border border-slate-600 rounded w-full" />
                </div>
                <div className="flex justify-center items-center mt-9">
                    <button type="submit" className="px-10 text-white text-lg tracking-wide font-semibold py-1.5 bg-blue-950 rounded-md">Register</button>
                </div>

                <div className="flex justify-center items-center mt-5">
                    <p>Already have an account ? <span className="text-blue-700 cursor-pointer font-semibold tracking-wide underline" onClick={() => props.setRoute(true)}>Register</span></p>
                </div>

            </form>
        </div>
    )
}
