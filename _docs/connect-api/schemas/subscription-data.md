# SubscriptionData
| type                | name           | description                                            |
|---------------------|----------------|--------------------------------------------------------|

/** @var Ulid subscription id */
public Ulid $id;

/** @var string access code for this subscription */
public string $accessCode;

/** @var DateTimeImmutable|null timestamp when the subscription stops working (can be extended by payment by the student), note that this date does shift depending on if the user extended the course/when the refresher course is activated */
public ?DateTimeImmutable $expiresAt = null;

/** @var DateTimeImmutable|null timestamp when the course was selected for this subscription, note that this can be null when no course was selected when purchasing the code and the user has not selected anything yet */
public ?DateTimeImmutable $activatedAt = null;

/** @var DateTimeImmutable|null timestamp when the user was last seen visiting a page in our study section */
public ?DateTimeImmutable $lastSeenAt = null;

/** @var CourseData|null the course information for the activated course */
public ?CourseData $course = null;

/** @var DateTimeImmutable|null timestamp when the theory section of the course was first completed */
public ?DateTimeImmutable $courseCompletedAt = null;

/** @var DateTimeImmutable|null timestamp when the refresher course was last activated (can be done multiple times) */
public ?DateTimeImmutable $refresherCourseActivatedAt = null;

/** @var DateTimeImmutable|null timestamp of when the user was blocked */
public ?DateTimeImmutable $blockedAt = null;

/** @var string|null reason why this access code is blocked */
public ?string $blockedReason = null;

/** @var ProgressionData|null progression for the student, not available if course is null (not activated) */
public ?ProgressionData $progression = null;
