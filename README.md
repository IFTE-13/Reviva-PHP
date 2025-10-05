# Reviva

## Overview
Reviva is an innovative web platform designed to provide comprehensive PC parts repair services, addressing the growing need for reliable and accessible technical support in the digital age. The platform streamlines the repair process, integrates advanced diagnostic tools, and promotes user empowerment through educational resources. By prioritizing transparency, customer satisfaction, and sustainability, Reviva aims to revolutionize the PC repair industry.

## Features
- **User-Friendly Interface**: Simplifies navigation for users of all technical backgrounds.
- **Advanced Diagnostics**: Employs machine learning algorithms for accurate and efficient hardware issue identification.
- **Transparent Pricing**: Clear pricing models to foster customer trust.
- **Educational Resources**: Troubleshooting guides and maintenance tips to empower users.
- **Community Forum**: A space for users to share experiences, seek advice, and build a knowledge base.
- **Logistics Integration**: Seamless pick-up and delivery services for a hassle-free repair process.
- **Subscription Plans**: Offers premium features like priority support and extended warranties.
- **Sustainability Focus**: Promotes repair and reuse to reduce electronic waste.

## Project Structure
- **Abstract**: Outlines the platform’s purpose and contributions.
- **Introduction**: Discusses the need for reliable PC repair services and Reviva’s mission.
- **Related Works**: Reviews existing research and platforms in the PC repair industry.
- **Proposed System**: Details the platform’s architecture, including hardware/software requirements and user roles.
- **Design**: Describes the UI/UX design, including registration, profile management, and rider logistics.
- **Conclusion and Future Work**: Summarizes achievements and outlines plans for enhancements like mobile apps and advanced analytics.

## Installation
To set up the Reviva platform locally, follow these steps:

### Prerequisites
- **Hardware Requirements**:
  - Processor: Celeron® Dual-Core CPU @ 1.90 GHz
  - RAM: At least 350 MB
  - System Type: 32-bit Operating System
  - Hard Drive: Minimum 100 GB free disk space
  - Network: Ethernet or Wi-Fi adapter

- **Software Requirements**:
  - Visual Studio Code
  - XAMPP Control Panel
  - Node.js

- **Programming Languages and Frameworks**:
  - HTML
  - Tailwind CSS
  - PHP
  - JavaScript

### Setup Instructions
1. **Clone the Repository**:

   ```bash
   git clone https://github.com/IFTE-13/Reviva-PHP.git
   ```
3. **Install Dependencies**:
- Ensure Node.js is installed: `npm install`
- Set up XAMPP for the PHP backend and MySQL database.

3. **Configure the Database**:
- Import the provided SQL schema for tables: `Feedback`, `Product/Service Request`, `Service`, `Transaction`, and `User`.
- Update database credentials in the configuration file (e.g., `config.php`).

4. **Run the Application**:
- Start the XAMPP Apache and MySQL servers.
- Open the project in Visual Studio Code and run it via a local server (e.g., `http://localhost/Reviva`).

## Usage
- **Admin**: Manage workers, managers, riders, and service requests.
- **Customer**: Register, request repairs, track progress, and access educational resources.
- **Manager**: Oversee operations and monitor service requests.
- **Worker**: Handle repair tasks and update service statuses.
- **Rider**: Manage pick-up and delivery logistics through the rider portal.

## Database Structure
The platform uses the following tables:
- **Feedback**: Stores user feedback.
- **Product/Service Request**: Tracks repair requests.
- **Service**: Details available repair services.
- **Transaction**: Records payment and service transactions.
- **User**: Manages user profiles and roles (Admin, Customer, Manager, Worker, Rider).

## Diagrams
- **ER Diagram**: Visualizes relationships between database tables.
- **Data Flow Chart**: Illustrates the flow of data through the system.

## Future Work
- **Mobile Application**: Develop a mobile app for on-the-go access.
- **Advanced Analytics**: Implement predictive maintenance and user behavior analysis.
- **Remote Assistance**: Add real-time troubleshooting features.
- **Expanded Services**: Include software troubleshooting and niche market support.

## References
- [Web Technology for Developers](https://developer.mozilla.org/en-US/docs/Web)
- [Shadcn/Ui](https://ui.shadcn.com/)
- [GitHub](https://github.com/)
- [JavaScript — MDN](https://developer.mozilla.org/en-US/docs/Web/JavaScript)
- [W3Schools](https://www.w3schools.com/)
- [Open AI](https://chat.openai.com/)

## Contributing
Contributions are welcome! Please fork the repository, create a new branch, and submit a pull request with your changes. Ensure your code follows the project’s coding standards and includes appropriate documentation.

## License
This project is licensed under the MIT License. See the `LICENSE` file for details.
