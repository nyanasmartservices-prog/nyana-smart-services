export default function NyanaSmartAccountantDashboard() {
  const stats = [
    { title: 'Total Revenue', value: '25,400,000 RWF' },
    { title: 'Total Expenses', value: '8,200,000 RWF' },
    { title: 'Net Profit', value: '17,200,000 RWF' },
    { title: 'Pending Invoices', value: '14' },
  ];

  return (
    <div className="min-h-screen bg-gray-100 p-6">
      <div className="mb-8 flex items-center justify-between">
        <div>
          <h1 className="text-4xl font-bold text-gray-900">
            Nyana Smart Services
          </h1>
          <p className="mt-2 text-gray-600">
            Full Accountant & Financial Management Dashboard
          </p>
        </div>

        <button className="rounded-2xl bg-black px-6 py-3 text-white shadow-lg">
          Generate Report
        </button>
      </div>

      <div className="grid grid-cols-1 gap-6 md:grid-cols-2 xl:grid-cols-4">
        {stats.map((item, index) => (
          <div
            key={index}
            className="rounded-3xl bg-white p-6 shadow-lg"
          >
            <h2 className="text-sm text-gray-500">{item.title}</h2>
            <p className="mt-4 text-3xl font-bold text-black">
              {item.value}
            </p>
          </div>
        ))}
      </div>
    </div>
  );
}
