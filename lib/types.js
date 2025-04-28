export const Status = {
    ACTIVE: "Active",
    INACTIVE: "Inactive",
    PAID: "Paid",
    PENDING: "Pending",
    COMPLETED: "Completed",
    UPCOMING: "Upcoming",
    IN_PROGRESS: "In Progress",
  }
  
  
  /**
   * @typedef {Object} Member
   * @property {number} id
   * @property {string} name
   * @property {string} email
   * @property {string} phone
   * @property {string} joinDate
   * @property {"Active" | "Inactive"} status
   */
  
  /**
   * @typedef {Object} Activities
   * @property {number} id
   * @property {string} action
   * @property {string} description
   * @property {string} timestamp
   */
  
  /**
   * @typedef {Object} Schedule
   * @property {string} month
   * @property {string} recipient
   * @property {"Completed" | "In Progress" | "Upcoming"} status
   * @property {number} amount
   */
  
  /**
   * @typedef {Object} Routes
   * @property {string} label
   * @property {string} icon
   * @property {string} href
   * @property {boolean} active
   */
  
  /**
   * @typedef {Object} Members
   * @property {number} id
   * @property {string} name
   * @property {"Paid" | "Pending"} status
   * @property {number} amount
   * @property {string} date
   */
  
  /**
   * @typedef {Object} MembersList
   * @property {number} id
   * @property {string} name
   * @property {string} email
   * @property {string} phone
   * @property {string} joinDate
   * @property {"Active" | "Pending"} status
   */
  
  /**
   * @typedef {Object} RecentPayment
   * @property {number} id
   * @property {string} month
   * @property {number} amount
   * @property {string} date
   * @property {"Completed" | "Pending"} status
   * @property {string} reference
   */
  
  /**
   * @typedef {Object} PaymentHistory
   * @property {number} id
   * @property {string} month
   * @property {number} amount
   * @property {string} date
   * @property {"Completed" | "Pending"} status
   * @property {string} reference
   */
  
  /**
   * @typedef {Object} MemberStats
   * @property {number} contributionAmount
   * @property {string} contributionStatus
   * @property {string} nextPaymentDate
   * @property {string} receivingMonth
   * @property {number} totalContributed
   * @property {number} totalReceived
   */
  
  /**
   * @typedef {Object} Contribution
   * @property {number} id
   * @property {number} memberId
   * @property {string} month
   * @property {number} amount
   * @property {string|null} date
   * @property {"Completed" | "Pending"} status
   */
  
  /**
   * @typedef {Object} PaymentScheduleItem
   * @property {string} month
   * @property {string} recipient
   * @property {"Completed" | "In Progress" | "Upcoming"} status
   * @property {number} amount
   */
  
  /**
   * @typedef {Object} ContributionReport
   * @property {string} month
   * @property {string} year
   * @property {number} totalMembers
   * @property {number} contributedMembers
   * @property {number} pendingMembers
   * @property {number} totalAmount
   * @property {number} collectedAmount
   * @property {number} pendingAmount
   * @property {Array<{
   *   memberId: number,
   *   name: string,
   *   amount: number,
   *   date: string | null,
   *   status: "Completed" | "Pending"
   * }>} contributions
   */
  
  /**
   * @typedef {Object} MemberStatusReport
   * @property {string} month
   * @property {string} year
   * @property {Array<{
   *   id: number,
   *   name: string,
   *   totalContributed: number,
   *   totalReceived: number,
   *   nextReceivingMonth: string,
   *   status: "Active" | "Inactive"
   * }>} members
   */
  
  /**
   * @typedef {Object} PaymentHistoryReport
   * @property {string} year
   * @property {Array<{
   *   month: string,
   *   totalCollected: number,
   *   recipient: string,
   *   distributionDate: string
   * }>} payments
   */
  
  /**
   * @typedef {Object} AnnualSummaryReport
   * @property {string} year
   * @property {number} totalCollected
   * @property {number} totalDistributed
   * @property {number} pendingDistribution
   * @property {Array<{
   *   month: string,
   *   collected: number,
   *   distributed: number
   * }>} monthlyBreakdown
   */
  
  /**
   * @typedef {Object} ContributionStats
   * @property {number} totalMembers
   * @property {number} contributedMembers
   * @property {number} pendingMembers
   * @property {number} totalAmount
   * @property {number} collectedAmount
   * @property {number} pendingAmount
   */
  