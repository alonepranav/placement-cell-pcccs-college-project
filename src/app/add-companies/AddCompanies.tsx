
export default function AddCompanies() {
    return (
        <div className="flex justify-center items-center h-screen w-screen">

            {/* <div className="max-w-md bg-white rounded-lg overflow-hidden shadow-lg shadow-slate-300 p-6 w-full md:w-[30rem] mx-3 border-2 border-slate-300"> */}
            <div className="w-[30rem]">
                <p className="font-semibold text-gray-800 mb-9 text-center text-4xl">Add Company</p>
                <br />
                <form className="">
                    <div className="mb-8">
                        <label className="mb-1 block text-lg">Company Name</label>
                        <input type="text" placeholder="Enter Company Name" id="name" name="name" className="border border-slate-500 px-2 py-2  w-full focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md" />
                    </div>
                    <div className="mb-6">
                        <label className="mb-1 block text-lg">Company Visiting Date</label>
                        <input type="date" placeholder="Enter Company Name" id="name" name="name" className="border border-slate-500 px-2 py-2  w-full focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md" />
                    </div>
                    <div className="mb-6">
                        <label className="mb-1 block text-lg">Open Position</label>
                        <select name="" className="border border-slate-500 px-2 py-2  w-full focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md">
                            <option value="Web Developer">Choose Role</option>
                            <option value="Web Developer">Web Developer</option>
                            <option value="Web Developer">Android Developer</option>
                            <option value="Web Developer">Backend Developer</option>
                            <option value="Web Developer">Frontend Developer</option>
                            <option value="Web Developer">Software Developer</option>
                        </select>
                    </div>
                    <div className="mt-10">
                        <button type="submit" className="py-2.5 px-4 w-full bg-indigo-500 text-white rounded-md shadow-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    )
}
