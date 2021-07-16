<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;
use Illuminate\Support\Str;

class BotManController extends Controller
{
    public $questions = [
        [
            'question' => "Are all Department degrees HEC recognized?",
            'answer' => "Yes, all degrees are HEC recognized.",
            'relevant_terms' => ['test', 'coke'],
        ],
        [
            'question' => "How to apply online for Admissions?",
            'answer' => "Visit the website www. usa.edu.pk and click on the admissions tab.",
            'relevant_terms' => ['test', 'coke'],
        ],
        [
            'question' => "Are there any merit based scholarships?",
            'answer' => "Yes, please contact admission office for details.",
            'relevant_terms' => ['test', 'coke'],
        ],
        [
            'question' => "Please give the admission criteria for different programs?",
            'answer' => "BBA: 
            The candidate willing to get admission in BBA program must have: FA/FSc/I.Com/D.com or intermediate or equivalent degree with a minimum of 2nd division or with minimum of 45% marks.
                  MBA: 
                 a. Students with Business Education Background
            The program has adopted the entry/admission requirements defined in HEC guidelines. The candidate willing to get admission in MBA (1.5 year) program must have: BBA/B.Com (16 years) / MBA/M.Com; 16 years of education in Business Administration/ Management Sciences from a chartered university with a minimum of 2nd division or with minimum of 2.5 CGPA.
            
            b. Students with Non-Business Education Background
            The program has adopted the entry/admission requirements defined in HEC guidelines. The candidate willing to get admission in MBA (2 year program) must have: 16 years of education in any discipline from a chartered university with a minimum of 2nd division or with minimum of 2.5 CGPA.",
            'relevant_terms' => ['test', 'coke'],
        ],
        [
            'question' => "How to apply online for Admissions?",
            'answer' => "Visit the website www. usa.edu.pk and click on the admissions tab.
            ",
            'relevant_terms' => ['test', 'coke']
        ],
        [
            'question' => "What is the process for admission?",
            'answer' => "Apply online or visit the campus
            Appear for the Appear for the Aptitude Test.
            Appear for panel interview (physical/online)
            Wait for decision of panel via WhatsApp and Email
            Complete fee payments and receive official USA email address
            ",
            'relevant_terms' => ['test', 'coke']
        ],
        [
            'question' => "Should Applicant submit/deposit any paid Challan copies to the admission office of campus?",
            'answer' => "Yes",
            'relevant_terms' => ['test', 'coke']
        ],
        [
            'question' => "Is it compulsory to give Aptitude Test?  ",
            'answer' => "Yes, interview is compulsory for qualifying for admission.",
            'relevant_terms' => ['test', 'coke']
        ],
        [
            'question' => "I have given my intermediate/ equivalent exams but my result is not announced yet, Am I eligible to apply for admission?",
            'answer' => "Yes, you are eligible for a provisional admission subject to providing a written affidavit on stamp paper that your final result will meet the minimum criteria for admissions set by the University.",
            'relevant_terms' => ['test', 'coke']
        ], [
            'question' => "Are there any merit based scholarships?",
            'answer' => "Yes, please contact admission office for details.",
            'relevant_terms' => ['test', 'coke']
        ],
        [
            'question' => "Are there any merit-cum-need based scholarships?",
            'answer' => "Yes, please contact admission office for details.",
            'relevant_terms' => ['test', 'coke']
        ],
        [
            'question' => "What is the student transfer policy of the department?",
            'answer' => "Following conditions need to be met.
            We accept credits only from HEC recognized universities. The applicant must have CGPA of at least 2.00 for undergraduate programs and 2.50 for graduate programs.
            Depending upon the similarity and equivalence of the courses, only credit hours of courses shall be transferred which shall have at least 60% marks in annual system or C+ and above grade in Bachelor or B and above grades in Master programs in semester system.
            The participant will provide a clearance certificate from his/her previous institution and will register himself/herself with USA. 
            The participant will have to cover the entire deficient course(s) (if any) within the stipulated time.
            50% courses of the total credit hours for the program can be transferred at the undergraduate level and 30% can be transferred in graduate programs of the course work only.
            ",
            'relevant_terms' => ['test', 'coke']
        ],
        [
            'question' => "What is GPA?",
            'answer' => "Grade points earned in a semester divided by total credit hours earned in a semester will be your Grade Point Average (GPA). ",
            'relevant_terms' => ['test', 'coke']
        ],
        [
            'question' => "What is CGPA?",
            'answer' => "Total grade point earned multiplied by total credit hours earned at any point is your Cumulative Grade Point Average.  ",
            'relevant_terms' => ['test', 'coke']
        ],
        [
            'question' => "Please give information about Library resources.",
            'answer' => "About 5000 books related covering different subjects of Management Sciences.  ",
            'relevant_terms' => ['test', 'coke']
        ],
        [
            'question' => "How many credit hours are required to complete different business study programs?",
            'answer' => "Credit-hour requirement by program is as follows
            BBA (Hons) 132 credit hours (including 6 credit hours for project)
            MBA 30 credit hours (including 6 credit hours for project)
            MBA (2.5) 72 credit hours (including 6 credit hours for project)
            MBA (3.5) 96 credit hours (including 6 credit hours for project) 
            ",
            'relevant_terms' => ['test', 'coke']
        ],
        [
            'question' => "What time the classes start and finish?",
            'answer' => "Yes. (Certain terms and conditions apply)",
            'relevant_terms' => ['test', 'coke']
        ],
        [
            'question' => "Can I add or drop a course during a semester?",
            'answer' => "Yes. (Certain terms and conditions apply)",
            'relevant_terms' => ['test', 'coke']
        ],
        [
            'question' => "How many teachers are foreign qualified?",
            'answer' => "About 20%.",
            'relevant_terms' => ['test', 'coke']
        ],
        [
            'question' => "Please state the attendance policy of the university?",
            'answer' => "80% as recommended by HEC.",
            'relevant_terms' => ['test', 'coke']
        ],
        [
            'question' => "What is the pass grade for the different programs?",
            'answer' => "D grade (50%)",
            'relevant_terms' => ['test', 'coke']
        ],
        [
            'question' => "Are the classes Air conditioned?",
            'answer' => "Yes.",
            'relevant_terms' => ['test', 'coke']
        ],
        [
            'question' => "Does University have student transport facility?",
            'answer' => "No.",
            'relevant_terms' => ['test', 'coke']
        ],
        [
            'question' => "How many student societies does the University have?",
            'answer' => "25 and counting",
            'relevant_terms' => ['test', 'coke']
        ],
        [
            'question' => "Is there a dress code?",
            'answer' => "Yes. Please find the detail in prospectus",
            'relevant_terms' => ['test', 'coke']
        ],
        [
            'question' => "What is the pass percentage for a course?",
            'answer' => "50%",
            'relevant_terms' => ['test', 'coke']
        ],
        [
            'question' => "What is the grading policy for different programs?",
            'answer' => "For all programs the grading system is as follows",
            'relevant_terms' => ['test', 'coke']
        ],
        [
            'question' => "What sports facilities does University offer?",
            'answer' => "Several. Basket ball, table tennis, badminton, cricket, foot ball and others. ",
            'relevant_terms' => ['test', 'coke']
        ],
        [
            'question' => "Does the department/university facilitate the students for Internship?",
            'answer' => "Yes, department/university encourage and facilitates the students to go for their internships in corporate sector.",
            'relevant_terms' => ['test', 'coke']
        ],
        [
            'question' => "Is there a secured parking facility?",
            'answer' => "Yes",
            'relevant_terms' => ['test', 'coke']
        ],
        [
            'question' => "How many campuses does University have?",
            'answer' => "2",
            'relevant_terms' => ['test', 'coke']
        ],
        [
            'question' => "Where is the University located?",
            'answer' => "⦁	Main Campus (47- Tufail Road, Lahore Cantt)
            ⦁	Raiwind Campus (5-KM Raiwind Road, Lahore)
            ",
            'relevant_terms' => ['test', 'coke']
        ],
        [
            'question' => "Do you have campus wide WiFi Facility?",
            'answer' => "Yes. ",
            'relevant_terms' => ['test', 'coke']
        ],
        [
            'question' => "Do you support students in finding jobs after graduations?",
            'answer' => "Yes, we have a functioning student job portal and also a career counselling office.",
            'relevant_terms' => ['test', 'coke']
        ],
        [
            'question' => "Are all Department degrees HEC recognized?",
            'answer' => "Yes, all degrees are HEC recognized.  ",
            'relevant_terms' => ['test', 'coke']
        ],
        [
            'question' => "What is the procedure to get HEC attestation of USA degree?",
            'answer' => "Degree, transcripts and other documents need to be presented at the HEC offices – Lahore or Islamabad. ",
            'relevant_terms' => ['test', 'coke']
        ],
        [
            'question' => "Do you have admission quota for sports?",
            'answer' => "No.",
            'relevant_terms' => ['test', 'coke']
        ],
        [
            'question' => "What happens if a student falls ill during a semester?",
            'answer' => "Some relaxation in attendance is granted on a case to case basis proper medical certificate and other documents are required. ",
            'relevant_terms' => ['test', 'coke']
        ],
        [
            'question' => "Does your campus have facilities to accommodate physically challenged students?",
            'answer' => "No",
            'relevant_terms' => ['test', 'coke']
        ],
        [
            'question' => "Can a student proceed for Ummrah/Hajj within a semester?",
            'answer' => "Hajj break is permissible. Students need to plan Ummrah during semester breaks",
            'relevant_terms' => ['test', 'coke']
        ],
        [
            'question' => "Can a student take a leave during semester to fulfill Aqamah (work permits/immigration) requirements?",
            'answer' => "An allowance is made in this regards. Proper documentation required. ",
            'relevant_terms' => ['test', 'coke']
        ], [
            'question' => "Do you have a kinship policy with regards to admission in your different programs?",
            'answer' => "Yes. Please see prospectus for more details.",
            'relevant_terms' => ['test', 'coke']
        ], [
            'question' => "Does university take students on industry tours?",
            'answer' => "A regular feature. ",
            'relevant_terms' => ['test', 'coke']
        ], [
            'question' => "Does university take students to excursion trips?",
            'answer' => "Occasionally. ",
            'relevant_terms' => ['test', 'coke']
        ], [
            'question' => "Please give the detail information about the fee structure and fee refund policy for different degree programs?",
            'answer' => "Please refer to the admissions office. ",
            'relevant_terms' => ['test', 'coke']
        ], [
            'question' => "Are there any hostel facilities for male?",
            'answer' => "No.",
            'relevant_terms' => ['test', 'coke']
        ], [
            'question' => "Are there any hostel facilities for females?",
            'answer' => "Yes.",
            'relevant_terms' => ['test', 'coke']
        ], [
            'question' => "Is the university a government or a private institution?
                ",
            'answer' => "Private.",
            'relevant_terms' => ['test', 'coke']
        ], [
            'question' => "Where can I get admission and other relevant forms?",
            'answer' => "Please refer to the admissions office. ",
            'relevant_terms' => ['test', 'coke']
        ], [
            'question' => "When was the university established?",
            'answer' => "2005.",
            'relevant_terms' => ['test', 'coke']
        ],
        [
            'question' => "Who is the current Vice Chancellor?",
            'answer' => "Mian Imran Masood (Former Education Minister Punjab)",
            'relevant_terms' => ['test', 'coke']
        ], [
            'question' => "What is the total number of Faculty in the department?",
            'answer' => "18",
            'relevant_terms' => ['test', 'coke']
        ], [
            'question' => "What will be the structure and duration for Program Admission test?",
            'answer' => "Please refer to the admissions office. ",
            'relevant_terms' => ['test', 'coke']
        ], [
            'question' => "Are student interviews part of the admission?",
            'answer' => "Yes",
            'relevant_terms' => ['test', 'coke']
        ], [
            'question' => "How many full time faculty does the department have?",
            'answer' => "18",
            'relevant_terms' => ['test', 'coke']
        ], [
            'question' => "What is the student-teacher ratio in the department?",
            'answer' => "20:1.",
            'relevant_terms' => ['test', 'coke']
        ], [
            'question' => "What is the student-computer ratio?",
            'answer' => "15:1",
            'relevant_terms' => ['test', 'coke']
        ], [
            'question' => "What is the male-female student ratio?",
            'answer' => "About 4:1. ",
            'relevant_terms' => ['test', 'coke']
        ], [
            'question' => "Does the university have access to famous international digital databases?",
            'answer' => "Yes",
            'relevant_terms' => ['test', 'coke']
        ], [
            'question' => "What is the plagiarism policy of the university?",
            'answer' => "All documents go through plagiarism test. ",
            'relevant_terms' => ['test', 'coke']
        ], [
            'question' => "HOW TO APPLY?",
            'answer' => "After getting the information regarding the courses and fulfilling the eligibility criteria, the student can apply for any number of courses by paying required registration amount for reserving the seat ",
            'relevant_terms' => ['test', 'coke']
        ], [
            'question' => "MEDIUM OF INSTRUCTION",
            'answer' => "English.",
            'relevant_terms' => ['test', 'coke']
        ], [
            'question' => "ADMISSION REQUIREMENTS",
            'answer' => "A Student should check if he/she meets the eligibility criteria for the course they wish to pursue and submit (photocopies) of all their testimonials for verification.
            ",
            'relevant_terms' => ['test', 'coke']
        ], [
            'question' => "WHAT IF A STUDENT FAILS TO REGISTER FOR THE SELECTION ROUNDS BEFORE THE DEADLINE?",
            'answer' => "The student may call the admission office to inform the proper reasons thereof and may request for an extension of dates. Final decision in this regard will be taken by the Admissions office.",
            'relevant_terms' => ['test', 'coke']
        ], [
            'question' => "WHAT IS THE BASIS FOR AN ADMISSION DECISION?",
            'answer' => "Admission decisions for Bachelor’s Degree Programs are based on scholastic aptitude, performance score in selection rounds and suitability to take up the desired course provided the candidate meets the eligibility condition as mentioned in the brochures in terms of qualifying aggregate percentage/marks/grades in any Bachelor Degree ",
            'relevant_terms' => ['test', 'coke']
        ]

    ];

    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');
        $botman->hears('{message}', function ($botman, $message) {
            $answers = getAnswers($this->questions, $message);
            if ($answers) {
                foreach ($answers as $answer) {
                    $botman->reply($answer);
                }
            } else {
                $botman->reply("I'm a bot programmed to answer only some of the frequent questions.");
            }
        });
        $botman->listen();
    }
}
