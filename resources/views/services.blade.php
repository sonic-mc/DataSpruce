@extends('layouts.app')

@section('title', 'Our Services')

@section('content')
<div class="container my-5">
    <h2 class="text-center mb-4">Our Services</h2>
    <div class="row">

        <!-- Service 1 -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100">
                <img src="https://cdn.technologyadvice.com/wp-content/uploads/2022/06/Data-Cleaning-scaled.jpeg" class="card-img-top" alt="Data Cleaning">
                <div class="card-body">
                    <h4 class="card-title">Data Cleaning and Formatting</h4>
                    <p class="card-text"><p><em>Transform raw, messy data into clean, accurate, and structured datasets ready for analysis or reporting.</em></p>

                    <p>
                        Many businesses and organizations struggle with inconsistent, incomplete, or disorganized data that slows down decision-making and leads to inaccurate insights.
                        I specialize in cleaning and formatting datasets so they are easy to work with, reliable, and ready for use in spreadsheets, dashboards, or data analysis tools.
                    </p>
                    
                    <p>This includes:</p>
                    <ul>
                        <li>🧹 <strong>Removing duplicates, blanks, and errors</strong></li>
                        <li>🗂️ <strong>Standardizing formats</strong> (e.g., dates, currency, phone numbers)</li>
                        <li>🔄 <strong>Converting data types</strong> (e.g., text to numbers, strings to dates)</li>
                        <li>✂️ <strong>Splitting or merging columns</strong> for better structure</li>
                        <li>🧩 <strong>Handling missing values</strong> intelligently</li>
                        <li>🔍 <strong>Validating and correcting entries</strong> for consistency</li>
                        <li>📊 <strong>Preparing data for tools like Excel, Power BI, or Python/Pandas</strong></li>
                    </ul>
                    
                    <p>
                        Whether you’re dealing with messy spreadsheets, exported CRM data, or sales records, I’ll clean it up and deliver a polished dataset that saves you time and boosts productivity.
                    </p></p>
                    <a href="#" class="btn btn-primary">Contact Us</a>
                </div>
            </div>
        </div>

        <!-- Service 2 -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100">
                <img src="https://img.freepik.com/premium-photo/data-analyst-working-analytics-dashboard-engaged-business-analytics-including-kpis_1233889-1117.jpg?ga=GA1.1.341280457.1747978859&semt=ais_hybrid&w=740" class="card-img-top" alt="Dashboard Creation">
                <div class="card-body">
                    <h4 class="card-title">Dashboard Creation</h4>
                    <p class="card-text"><p><em>Get clear, interactive dashboards that turn complex data into easy-to-understand visuals built using Power BI, Tableau, or Google Data Studio.</em></p>

                    <p>
                        In today’s fast-paced world, decision-makers need insights at a glance. We design and build custom dashboards that present your business data in a clean, visual, and interactive format so you can quickly spot trends, track performance, and make informed decisions.
                    </p>
                    
                    <p>Our dashboards are:</p>
                    <ul>
                        <li>📈 <strong>Interactive</strong> — filter, sort, and drill down into your data in real time</li>
                        <li>🖥️ <strong>Custom-tailored</strong> — designed to match your KPIs, goals, and branding</li>
                        <li>🔗 <strong>Connected</strong> — integrated with Excel, Google Sheets, SQL databases, CRMs, and more</li>
                        <li>📱 <strong>Responsive</strong> — optimized for viewing on desktops, tablets, and phones</li>
                        <li>⏱️ <strong>Time-saving</strong> — automate reporting and eliminate manual spreadsheet updates</li>
                    </ul>
                    
                    <p>
                        Whether you're tracking sales performance, website traffic, marketing ROI, or employee productivity — we’ll build a professional dashboard tailored to your needs, using the tools you prefer: Power BI, Tableau, or Google Data Studio.
                    </p></p>
                    <a href="#" class="btn btn-primary">Contact Us</a>
                </div>
            </div>
        </div>

        <!-- Service 3 -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100">
                <img src="https://img.freepik.com/premium-photo/young-african-businesswoman-presenting-data-analysis-dashboard-tv-concord_31965-129100.jpg?ga=GA1.1.341280457.1747978859&semt=ais_hybrid&w=740" class="card-img-top" alt="Data Analysis Reports">
                <div class="card-body">
                    <h4 class="card-title">Data Analysis and Insights Reports</h4>
                    <p class="card-text"><p><em>We provide detailed data analysis and insight reports that uncover hidden patterns, trends, and opportunities to support smart decision-making.</em></p>

                    <p>
                        Raw data alone doesn't drive growth — insights do. We help businesses turn numbers into knowledge by analyzing their data to reveal what’s working, what’s not, and where opportunities lie. 
                        Whether you're working with sales data, customer behavior, marketing performance, or operational metrics — we dig deep and make sense of it.
                    </p>
                    
                    <p>Our insight reports include:</p>
                    <ul>
                        <li>🔍 <strong>Trend identification</strong> — discover upward or downward patterns over time</li>
                        <li>📊 <strong>Performance comparisons</strong> — analyze KPIs across departments, regions, or periods</li>
                        <li>👥 <strong>Customer segmentation</strong> — group your audience by behavior, preferences, or value</li>
                        <li>📌 <strong>Root cause analysis</strong> — identify what's driving success or decline</li>
                        <li>💡 <strong>Actionable recommendations</strong> — data-backed suggestions you can implement immediately</li>
                    </ul>
                    
                    <p>
                        We deliver our insights in clear, visual reports — with charts, summaries, and plain-language explanations — so you can make confident, data-driven decisions that move your business forward.
                    </p></p>
                    <a href="#" class="btn btn-primary">Contact Us</a>
                </div>
            </div>
        </div>

        <!-- Service 4 -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100">
                <img src="https://img.freepik.com/premium-photo/person-analyzing-data-computer-screen-illustrating-knowledgeintensive-tasks-whitecollar-work_73899-69750.jpg?ga=GA1.1.341280457.1747978859&semt=ais_hybrid&w=740" class="card-img-top" alt="Small Business Analytics">
                <div class="card-body">
                    <h4 class="card-title">Small Business Analytics Setup</h4>
                    <p class="card-text"><p><em>We set up simple, effective analytics systems tailored for small businesses — helping you track what matters without the overwhelm.</em></p>

                    <p>
                        Many small business owners struggle to understand their performance because they lack the right tracking tools. We simplify the process by setting up essential analytics systems that monitor your key business activities — from website traffic to sales performance and customer behavior.
                    </p>
                    
                    <p>Our setup includes:</p>
                    <ul>
                        <li>🛠️ <strong>Installation of analytics tools</strong> like Google Analytics, Google Tag Manager, or Meta Pixel</li>
                        <li>📋 <strong>Custom dashboards</strong> that show your most important metrics in one place</li>
                        <li>🎯 <strong>Conversion tracking</strong> — see how many leads, purchases, or signups you're getting</li>
                        <li>🌍 <strong>User behavior tracking</strong> — understand how people navigate your website or app</li>
                        <li>📈 <strong>Clear reporting</strong> — simple insights you can act on, even if you’re not tech-savvy</li>
                    </ul>
                    
                    <p>
                        Whether you run an online shop, a local service business, or a personal brand, we’ll equip you with the tools and insights you need to grow — without needing a full-time data analyst.
                    </p></p>
                    <a href="#" class="btn btn-primary">Contact Us</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100">
                <img src="https://img.freepik.com/free-photo/ui-ux-representations-with-laptop_23-2150201871.jpg?ga=GA1.1.341280457.1747978859&semt=ais_hybrid&w=740" class="card-img-top" alt="Small Business Analytics">
                <div class="card-body">
                    <h4 class="card-title">Web Design and Development</h4>
                    <p class="card-text"><p><em>We design and build custom websites for entrepreneurs, startups, and personal brands who want a strong and professional online presence — even if they have zero tech skills.</em></p>

                    <p>
                        A modern website is more than just a digital brochure — it's your business's first impression, a 24/7 sales rep, and a trust-building tool. We take care of the entire process, from design to launch, so you can focus on what you do best.
                    </p>
                    
                    <p>Our web design service includes:</p>
                    <ul>
                        <li>🎨 <strong>Clean, modern layouts</strong> that reflect your brand identity</li>
                        <li>📱 <strong>Mobile responsiveness</strong> — your site will look great on phones, tablets, and desktops</li>
                        <li>🧭 <strong>Easy navigation</strong> to guide visitors smoothly through your content</li>
                        <li>💬 <strong>Contact forms & WhatsApp integration</strong> for instant communication</li>
                        <li>🔍 <strong>SEO optimization</strong> to help you rank better on search engines</li>
                        <li>⚡ <strong>Fast, secure performance</strong> that keeps visitors engaged and builds trust</li>
                    </ul>
                    
                    <p>
                        Whether you're just starting out or looking to upgrade your online presence, we’ll deliver a website that not only looks amazing — but also works as a powerful marketing tool that helps you attract leads, build credibility, and grow your business.
                    </p></p>
                    <a href="#" class="btn btn-primary">Contact Us</a>
                </div>
            </div>
        </div>

        <!-- Service 5 -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100">
                <img src="https://blog.pixentia.com/hubfs/MicrosoftTeams-image%20(60).png" class="card-img-top" alt="Data Integration">
                <div class="card-body">
                    <h4 class="card-title">Data Integration and Automation</h4>
                    <p class="card-text"><p><em>We automate data integration and business processes to save you time, reduce errors, and keep everything running smoothly in the background.</em></p>

                    <p>
                        Manually moving data between systems is time-consuming, error-prone, and unsustainable as your business grows. That’s where we come in. We help you automate repetitive tasks and connect your tools and platforms so your data flows seamlessly — no more copy-pasting, uploading, or chasing reports.
                    </p>
                    
                    <p>Our automation services include:</p>
                    <ul>
                        <li>🔗 <strong>Connecting apps & platforms</strong> like CRMs, spreadsheets, databases, and cloud services</li>
                        <li>📤 <strong>Automating data entry & transfers</strong> between systems (e.g., Google Sheets to Excel, CRM to email platform)</li>
                        <li>📩 <strong>Scheduled data reports & alerts</strong> delivered straight to your inbox or dashboard</li>
                        <li>🔄 <strong>Real-time syncs</strong> that ensure your data is always up-to-date everywhere</li>
                        <li>📊 <strong>Workflow automation</strong> for tasks like form responses, invoice generation, and lead follow-ups</li>
                    </ul>
                    
                    <p>
                        Whether you use Excel, Google Workspace, Airtable, APIs, or cloud tools like Zapier or Make (Integromat), we’ll build a reliable system that saves you hours of manual work and gives you peace of mind.
                    </p></p>
                    <a href="#" class="btn btn-primary">Contact Us</a>
                </div>
            </div>
        </div>

        <!-- Service 6 -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100">
                <img src="https://img.freepik.com/premium-photo/handsome-young-african-man-shirt-looking-camera-smiling-while-working-office_425904-2030.jpg?ga=GA1.1.341280457.1747978859&semt=ais_hybrid&w=740" class="card-img-top" alt="Tech Consultancy">
                <div class="card-body">
                    <h4 class="card-title">Tech Consultancy</h4>
                    <p class="card-text"><p><em>We advise our clients on the best technologies to adopt for their specific business goals, ensuring they make informed, strategic decisions for long-term success.</em></p>

                        <p>
                            In today’s fast-evolving tech landscape, choosing the right tools and platforms can be overwhelming. Whether you're looking to streamline operations, enhance customer experiences, or scale your business, the right technology can make all the difference.
                        </p>

                        <p>Our advisory services include:</p>
                        <ul>
                            <li>🔍 <strong>Needs assessment</strong> — understanding your business goals and current tech stack</li>
                            <li>📈 <strong>Customized technology recommendations</strong> — tailored solutions that align with your objectives</li>
                            <li>🖥️ <strong>Cloud solutions</strong> — selecting the right cloud platforms for flexibility, scalability, and cost-efficiency</li>
                            <li>⚙️ <strong>Automation & integration tools</strong> — improving workflows by recommending the best tools for streamlining processes</li>
                            <li>📊 <strong>Data strategy</strong> — advising on data storage, analytics, and security practices</li>
                            <li>🎯 <strong>Scalability planning</strong> — helping you choose systems that grow with your business</li>
                        </ul>

                        <p>
                            With years of experience and a deep understanding of emerging technologies, we guide you toward the tools and systems that will maximize your impact and efficiency — while minimizing unnecessary expenses and complexity.
                        </p></p>
                    <a href="#" class="btn btn-primary">Contact Us</a>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
