

export default function HomeCompanies() {

    const companies = [
        "airtel",
        "amazon",
        "dell",
        "deloitte",
        "ey",
        "goldman",
        "google",
        "hitachi",
        "ibm",
        "isro",
        "jpmorgan",
        "kpmg",
        "mercedes",
        "microsoft",
        "netapp",
        "paypal",
        "salesforce",
        "samsung",
    ]

    return (
        <div className="h-screen w-screen flex justify-center items-center">

            <div>

                <p className="text-center text-4xl text-blue-950 font-bold">Thousands of students achieved their dream job at </p>

                <div className="flex flex-wrap mt-20 justify-center items-center px-20 gap-10">

                    {
                        companies.map((a, i) => {
                            return <div className="h-20 w-40" key={i}>
                                <img src={`/companies/${a}.png`} className="h-full w-full" alt="" key={i} />
                            </div>

                        })
                    }

                </div>
            </div>
        </div>
    )
}
